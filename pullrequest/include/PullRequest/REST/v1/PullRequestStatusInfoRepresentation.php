<?php
/**
 * Copyright (c) Enalean, 2023 - present. All Rights Reserved.
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

namespace Tuleap\PullRequest\REST\v1;

use Tuleap\User\REST\MinimalUserRepresentation;

/**
 * @psalm-immutable
 */
final class PullRequestStatusInfoRepresentation
{
    /**
     * @var string {@type string}
     */
    public string $status_type;

    /**
     * @var string {@type string}
     */
    public string $status_date;

    /**
     * @var MinimalUserRepresentation {@type MinimalUserRepresentation}
     */
    public MinimalUserRepresentation $status_updater;

    public function __construct(
        string $status_type,
        string $status_date,
        MinimalUserRepresentation $status_updater,
    ) {
        $this->status_date    = $status_date;
        $this->status_type    = $status_type;
        $this->status_updater = $status_updater;
    }
}
