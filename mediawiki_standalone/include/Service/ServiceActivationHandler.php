<?php
/*
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
 *
 */

declare(strict_types=1);

namespace Tuleap\MediawikiStandalone\Service;

use Tuleap\MediawikiStandalone\Instance\CreateInstanceTask;
use Tuleap\MediawikiStandalone\Instance\InitializationLanguageCodeProvider;
use Tuleap\MediawikiStandalone\Instance\OngoingInitializationsState;
use Tuleap\MediawikiStandalone\Instance\SuspendInstanceTask;
use Tuleap\Queue\EnqueueTaskInterface;

final class ServiceActivationHandler
{
    public function __construct(
        private readonly EnqueueTaskInterface $enqueue_task,
        private readonly InitializationLanguageCodeProvider $language_code_provider,
        private readonly OngoingInitializationsState $ongoing_initializations_state,
    ) {
    }

    public function handle(ServiceActivationEvent $event): void
    {
        if (! $event->isValid()) {
            return;
        }

        match ($event->is_used) {
            true => (function () use ($event): void {
                $this->ongoing_initializations_state->startInitialization($event->project);
                $this->enqueue_task->enqueue(new CreateInstanceTask($event->project, $this->language_code_provider));
            })(),
            false => $this->enqueue_task->enqueue(new SuspendInstanceTask($event->project)),
        };
    }
}
