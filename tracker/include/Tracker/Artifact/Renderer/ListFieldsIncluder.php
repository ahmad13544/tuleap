<?php
/**
 * Copyright (c) Enalean, 2021 - Present. All Rights Reserved.
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

namespace Tuleap\Tracker\Artifact\Renderer;

final class ListFieldsIncluder
{
    public static function includeListFieldsAssets(int $tracker_id): void
    {
        $include_assets = new \Tuleap\Layout\IncludeAssets(
            __DIR__ . '/../../../../frontend-assets',
            '/assets/trackers'
        );

        // List picker must be included **before** field dependencies execution
        $GLOBALS['HTML']->includeFooterJavascriptFile($include_assets->getFileURL('list-fields.js'));
        $GLOBALS['HTML']->includeFooterJavascriptFile($include_assets->getFileURL('run-field-dependencies.js'));
    }
}
