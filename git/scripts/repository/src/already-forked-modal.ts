/*
 * Copyright (c) Enalean, 2020 - present. All Rights Reserved.
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
 * along with Tuleap. If not, see http://www.gnu.org/licenses/.
 */

import { createModal } from "@tuleap/tlp-modal";

export default function initAlreadyForkedModal(): void {
    const button = document.getElementById("git-repository-already-forked-button");
    const modal_container = document.getElementById("git-repository-already-forked-modal");

    if (!button || !modal_container) {
        return;
    }

    const modal = createModal(modal_container);
    button.addEventListener("click", () => {
        modal.toggle();
    });
}
