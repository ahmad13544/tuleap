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
 */

import type { UpdateFunction } from "hybrids";
import { html } from "hybrids";
import type { LinkedArtifactPresenter } from "./LinkedArtifactPresenter";
import { getRestoreLabel, getUnlinkLabel } from "../../../../gettext-catalog";
import type { LinkField } from "./LinkField";
import { getArtifactStatusBadgeClasses, getCrossRefClasses } from "./NewLinkTemplate";
import "./LinkTypeSelectorElement";
import type { ValueChangedEvent } from "./LinkTypeSelectorElement";

type MapOfClasses = Record<string, boolean>;

const getStatusBadgeClassesWithRemoval = (artifact: LinkedArtifactPresenter): MapOfClasses => {
    const classes = getArtifactStatusBadgeClasses(artifact);
    classes["link-field-link-to-remove"] = artifact.is_marked_for_removal;
    return classes;
};

const getArtifactTableRowClasses = (artifact: LinkedArtifactPresenter): MapOfClasses => ({
    "link-field-table-row": true,
    "link-field-table-row-muted": artifact.status !== null && !artifact.is_open,
});

const getRemoveClass = (artifact: LinkedArtifactPresenter): string =>
    artifact.is_marked_for_removal ? "link-field-link-to-remove" : "";

const getCrossRefClassesWithRemoval = (artifact: LinkedArtifactPresenter): MapOfClasses => {
    const classes = getCrossRefClasses(artifact);
    classes["link-field-link-to-remove"] = artifact.is_marked_for_removal;
    return classes;
};

export const getTypeTemplate = (
    host: LinkField,
    artifact: LinkedArtifactPresenter
): UpdateFunction<LinkField> => {
    if (!host.controller.canChangeType(artifact)) {
        return html`<span class="link-field-artifact-readonly-type" data-test="readonly-type"
            >${artifact.link_type.label}</span
        >`;
    }
    const onValueChanged = (host: LinkField, event: CustomEvent<ValueChangedEvent>): void => {
        host.linked_artifacts_presenter = host.controller.changeLinkType(
            artifact,
            event.detail.new_link_type
        );
    };

    return html`<tuleap-artifact-modal-link-type-selector
        value="${artifact.link_type}"
        current_artifact_reference="${host.current_artifact_reference}"
        available_types="${host.allowed_link_types}"
        onvalue-changed="${onValueChanged}"
        data-test="type-selector"
    ></tuleap-artifact-modal-link-type-selector>`;
};

export const getActionButton = (
    host: LinkField,
    artifact: LinkedArtifactPresenter
): UpdateFunction<LinkField> => {
    const button_classes = [
        "tlp-table-cell-actions-button",
        "tlp-button-small",
        "tlp-button-danger",
        "tlp-button-outline",
    ];

    if (!host.controller.canMarkForRemoval(artifact)) {
        return html``;
    }

    if (!artifact.is_marked_for_removal) {
        const markForRemoval = (host: LinkField): void => {
            host.linked_artifacts_presenter = host.controller.markForRemoval(artifact.identifier);
        };
        return html`
            <button
                class="${button_classes}"
                type="button"
                onclick="${markForRemoval}"
                data-test="action-button"
            >
                <i class="fas fa-unlink tlp-button-icon" aria-hidden="true"></i>
                ${getUnlinkLabel()}
            </button>
        `;
    }

    const cancelRemoval = (host: LinkField): void => {
        host.linked_artifacts_presenter = host.controller.unmarkForRemoval(artifact.identifier);
    };
    return html`
        <button
            class="tlp-table-cell-actions-button tlp-button-small tlp-button-primary tlp-button-outline"
            type="button"
            onclick="${cancelRemoval}"
            data-test="action-button"
        >
            <i class="fas fa-undo-alt tlp-button-icon" aria-hidden="true"></i>
            ${getRestoreLabel()}
        </button>
    `;
};

export const getLinkedArtifactTemplate = (
    host: LinkField,
    artifact: LinkedArtifactPresenter
): UpdateFunction<LinkField> =>
    html`
        <tr class="${getArtifactTableRowClasses(artifact)}" data-test="artifact-row">
            <td class="link-field-table-cell-type ${getRemoveClass(artifact)}">
                ${getTypeTemplate(host, artifact)}
            </td>
            <td class="link-field-table-cell-xref ${getRemoveClass(artifact)}">
                <a
                    href="${artifact.uri}"
                    class="link-field-artifact-link"
                    title="${artifact.title}"
                    data-test="artifact-link"
                >
                    <span
                        class="${getCrossRefClassesWithRemoval(artifact)}"
                        data-test="artifact-xref"
                    >
                        ${artifact.xref.ref}
                    </span>
                    <span
                        class="link-field-artifact-title ${getRemoveClass(artifact)}"
                        data-test="artifact-title"
                    >
                        ${artifact.title}
                    </span>
                </a>
            </td>
            <td class="link-field-table-cell-status">
                ${artifact.status &&
                html`
                    <span
                        class="${getStatusBadgeClassesWithRemoval(artifact)}"
                        data-test="artifact-status"
                    >
                        ${artifact.status.value}
                    </span>
                `}
            </td>
            <td class="link-field-table-cell-action">${getActionButton(host, artifact)}</td>
        </tr>
    `;
