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

namespace Tuleap\Tracker\Notifications\RemoveRecipient;

use PFUser;
use Psr\Log\LoggerInterface;
use Tracker_Artifact_Changeset;
use Tracker_FormElementFactory;
use Tuleap\Tracker\Notifications\Recipient;
use Tuleap\Tracker\Notifications\RecipientRemovalStrategy;

final class RemoveRecipientThatCannotReadAnything implements RecipientRemovalStrategy
{
    public function __construct(
        private Tracker_FormElementFactory $form_element_factory,
    ) {
    }

    /**
     * @psalm-param array<string, Recipient> $recipients
     *
     * @psalm-return array<string, Recipient>
     */
    public function removeRecipient(
        LoggerInterface $logger,
        Tracker_Artifact_Changeset $changeset,
        array $recipients,
        bool $is_update,
    ): array {
        $comment = $changeset->getComment();
        if ($comment !== null && ! $comment->hasEmptyBody()) {
            $logger->debug(self::class . ' there is a comment, skipped');
            return $recipients;
        }

        foreach ($recipients as $key => $recipient) {
            if (! $recipient->check_permissions) {
                continue;
            }

            if (! $changeset->getArtifact()->userCanView($recipient->user) || ! $this->userCanReadAtLeastOneChangedField($changeset, $recipient->user)) {
                $logger->debug(self::class . ' ' . $key . ' removed');
                unset($recipients[$key]);
            }
        }

        return $recipients;
    }

    private function userCanReadAtLeastOneChangedField(Tracker_Artifact_Changeset $changeset, PFUser $user): bool
    {
        foreach ($changeset->getValues() as $field_id => $current_changeset_value) {
            $field             = $this->form_element_factory->getFieldById($field_id);
            $field_is_readable = $field && $field->userCanRead($user);
            $field_has_changed = $current_changeset_value && $current_changeset_value->hasChanged();
            if ($field_is_readable && $field_has_changed) {
                return true;
            }
        }
        return false;
    }
}
