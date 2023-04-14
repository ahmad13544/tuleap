<?php
/**
 * Copyright (c) Enalean, 2022-Present. All Rights Reserved.
 *
 * This file is a part of Tuleap.
 *
 * Tuleap is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * Tuleap is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Tuleap. If not, see <http://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

namespace Tuleap\Git\Hook\Asynchronous;

use Tuleap\Git\Hook\DefaultBranchPush\CommitHash;
use Tuleap\Git\Hook\DefaultBranchPush\DefaultBranchPushReceived;
use Tuleap\NeverThrow\Err;
use Tuleap\NeverThrow\Fault;
use Tuleap\NeverThrow\Ok;
use Tuleap\NeverThrow\Result;
use Tuleap\Queue\WorkerEvent;
use Tuleap\User\RetrieveUserById;

final class DefaultBranchPushParser
{
    public function __construct(
        private RetrieveUserById $user_retriever,
        private RetrieveGitRepository $git_repository_retriever,
    ) {
    }

    /**
     * @return Ok<DefaultBranchPushReceived> | Err<Fault>
     */
    public function parse(WorkerEvent $worker_event): Ok|Err
    {
        if ($worker_event->getEventName() !== AnalyzePushTask::TOPIC) {
            return Result::err(UnhandledTopicFault::build());
        }
        $payload = $worker_event->getPayload();
        if (! isset($payload['git_repository_id']) || ! is_int($payload['git_repository_id'])) {
            return Result::err(
                Fault::fromMessage(
                    sprintf(
                        'Payload is missing git_repository_id or git_repository_id is not an integer: %s',
                        var_export($payload, true)
                    )
                )
            );
        }
        if (! isset($payload['pushing_user_id']) || ! is_int($payload['pushing_user_id'])) {
            return Result::err(
                Fault::fromMessage(
                    sprintf(
                        'Payload is missing pushing_user_id or pushing_user_id is not an int: %s',
                        var_export($payload, true)
                    )
                )
            );
        }
        if (! isset($payload['commit_hashes']) || ! is_array($payload['commit_hashes'])) {
            return Result::err(
                Fault::fromMessage(
                    sprintf(
                        'Payload is missing commit_hashes or commit_hashes is not an array: %s',
                        var_export($payload, true)
                    )
                )
            );
        }
        $user_id = $payload['pushing_user_id'];
        $pusher  = $this->user_retriever->getUserById($user_id);
        if (! $pusher) {
            return Result::err(
                Fault::fromMessage(sprintf('Could not retrieve user with id #%d', $user_id))
            );
        }

        $commit_hashes = [];
        foreach ($payload['commit_hashes'] as $commit_hash) {
            $commit_hashes[] = CommitHash::fromString((string) $commit_hash);
        }

        $git_repository_id = $payload['git_repository_id'];
        return $this->git_repository_retriever->getRepository($git_repository_id, $pusher)
            ->map(
                static fn(\GitRepository $git_repository) => new DefaultBranchPushReceived(
                    $git_repository,
                    $pusher,
                    $commit_hashes
                )
            );
    }
}
