<?php
/**
 * Copyright (c) Enalean, 2015 - Present. All Rights Reserved.
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

namespace Tuleap\Tracker\Notifications;

final class ConfigNotificationAssignedToDao extends \Tuleap\DB\DataAccessObject
{
    public function searchConfigurationAssignedTo(int $tracker_id): bool
    {
        $sql = 'SELECT 1 FROM plugin_tracker_notification_assigned_to WHERE tracker_id = ?';

        return $this->getDB()->exists($sql, $tracker_id);
    }

    public function create(int $tracker_id): void
    {
        $sql = <<<SQL
        INSERT INTO plugin_tracker_notification_assigned_to(tracker_id) VALUES (?)
        ON DUPLICATE KEY UPDATE tracker_id = tracker_id
        SQL;

        $this->getDB()->run($sql, $tracker_id);
    }

    public function delete(int $tracker_id): void
    {
        $sql = 'DELETE FROM plugin_tracker_notification_assigned_to WHERE tracker_id = ?';

        $this->getDB()->run($sql, $tracker_id);
    }

    public function duplicate(int $template_tracker_id, int $new_tracker_id): void
    {
        $sql = <<<SQL
        INSERT INTO plugin_tracker_notification_assigned_to(tracker_id)
        SELECT ?
        FROM plugin_tracker_notification_assigned_to
        WHERE tracker_id = ?
        SQL;

        $this->getDB()->run($sql, $new_tracker_id, $template_tracker_id);
    }
}
