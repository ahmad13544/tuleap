<?php
/**
 * Copyright (c) Enalean, 2019 - Present. All Rights Reserved.
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

namespace Tuleap\Baseline\Factory;

class BaselineArtifactFactory
{
    public static function one(): BaselineArtifactBuilder
    {
        return (new BaselineArtifactBuilder())
            ->id(88)
            ->title("artifact title")
            ->description("artifact comment")
            ->initialEffort(2)
            ->status("Done")
            ->project(ProjectFactory::one())
            ->trackerId(3)
            ->trackerName('Epic')
            ->linkedArtifactIds([]);
    }
}
