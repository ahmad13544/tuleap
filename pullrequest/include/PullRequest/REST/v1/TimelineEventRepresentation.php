<?php
/**
 * Copyright (c) Enalean, 2016-Present. All Rights Reserved.
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

namespace Tuleap\PullRequest\REST\v1;

use Tuleap\User\REST\MinimalUserRepresentation;
use Tuleap\REST\JsonCast;

/**
 * @psalm-immutable
 */
class TimelineEventRepresentation
{
    /**
     * @var MinimalUserRepresentation {@type MinimalUserRepresentation}
     */
    public $user;

    /**
     * @var string {@type string}
     */
    public $post_date;

    /**
     * @var string {@type string}
     */
    public $event_type;

    /**
     * @var string {@type string}
     */
    public $type;
    /**
     * @var int {@type int}
     */
    public int $parent_id;


    public function __construct(MinimalUserRepresentation $user, int $post_date, int $event_type, int $parent_id)
    {
        $this->user       = $user;
        $this->post_date  = JsonCast::toDate($post_date);
        $this->event_type = PullRequestStatusTypeConverter::fromIntStatusToStringStatus($event_type);
        $this->type       = 'timeline-event';
        $this->parent_id  = $parent_id;
    }
}
