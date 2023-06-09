/*
 * Copyright (c) Enalean, 2020 - Present. All Rights Reserved.
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

import { createPopover } from "@tuleap/tlp-popovers";

export default function initCloneBarPopover(): void {
    const button = document.getElementById("git-repository-clone-popover-button");
    const target = document.getElementById("git-repository-clone-popover");
    const anchor = document.getElementById("git-repository-clone-popover-caret");

    if (!button || !target || !anchor) {
        return;
    }

    createPopover(button, target, { anchor });
}
