/*
 * Copyright (c) Enalean, 2022 - present. All Rights Reserved.
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

import { selectOrThrow } from "@tuleap/dom";
import { IS_CHILD_LINK_TYPE } from "@tuleap/plugin-tracker-constants";
import { Option } from "@tuleap/option";
import { LinkTypeSelectorElement } from "./LinkTypeSelectorElement";
import { setCatalog } from "../../../../gettext-catalog";
import { ArtifactCrossReferenceStub } from "../../../../../tests/stubs/ArtifactCrossReferenceStub";
import type { ArtifactCrossReference } from "../../../../domain/ArtifactCrossReference";
import { LinkTypeStub } from "../../../../../tests/stubs/LinkTypeStub";
import { FORWARD_DIRECTION, LinkType } from "../../../../domain/fields/link-field/LinkType";
import { CollectionOfAllowedLinksTypesPresenters } from "./CollectionOfAllowedLinksTypesPresenters";
import { VerifyHasParentLinkStub } from "../../../../../tests/stubs/VerifyHasParentLinkStub";
import { LinkTypesCollectionStub } from "../../../../../tests/stubs/LinkTypesCollectionStub";
import type { HostElement } from "./LinkTypeSelectorElement";

const getSelectMainOptionsGroup = (select: HTMLSelectElement): HTMLOptGroupElement =>
    selectOrThrow(select, "[data-test=link-type-select-optgroup]", HTMLOptGroupElement);

describe("LinkTypeSelectorElement", () => {
    let host: HostElement,
        allowed_link_types: CollectionOfAllowedLinksTypesPresenters,
        cross_reference: Option<ArtifactCrossReference>,
        dispatchEvent: jest.SpyInstance;

    beforeEach(() => {
        setCatalog({ getString: (msgid) => msgid });
        dispatchEvent = jest.fn();
        allowed_link_types =
            CollectionOfAllowedLinksTypesPresenters.fromCollectionOfAllowedLinkType(
                VerifyHasParentLinkStub.withNoParentLink(),
                LinkTypesCollectionStub.withParentPair()
            );
        cross_reference = Option.fromValue(ArtifactCrossReferenceStub.withRef("story #150"));
    });

    const render = (): HTMLSelectElement => {
        const target = document.implementation
            .createHTMLDocument()
            .createElement("div") as unknown as ShadowRoot;
        host = {
            value: LinkTypeStub.buildUntyped(),
            current_artifact_reference: cross_reference,
            available_types: allowed_link_types,
            dispatchEvent,
        } as unknown as HostElement;

        const render = LinkTypeSelectorElement.content(host);
        render(host, target);

        return selectOrThrow(target, "[data-test=link-type-select]", HTMLSelectElement);
    };

    it("should build the type selector", () => {
        const select = render();
        const optgroup = getSelectMainOptionsGroup(select);

        expect(optgroup.label).toBe("story #150");

        const options_with_label = Array.from(select.options).filter(
            (option) => option.label !== "–"
        );
        const separators = Array.from(select.options).filter((option) => option.label === "–");
        expect(separators).toHaveLength(1);
        expect(options_with_label).toHaveLength(3);

        const [untyped_option, parent_option, child_option] = options_with_label;
        expect(untyped_option.selected).toBe(true);
        expect(untyped_option.label).toBe("is Linked to");
        expect(parent_option.label).toBe("is Parent of");
        expect(child_option.label).toBe("is Child of");

        expect(options_with_label.every((option) => !option.disabled)).toBe(true);
    });

    it(`disables the reverse _is_child option if marked to be disabled`, () => {
        allowed_link_types =
            CollectionOfAllowedLinksTypesPresenters.fromCollectionOfAllowedLinkType(
                VerifyHasParentLinkStub.withParentLink(),
                LinkTypesCollectionStub.withParentPair()
            );
        const select = render();

        const child_of_is_disabled = Array.from(select.options).some(
            (option) => option.label === "is Child of" && option.disabled
        );
        expect(child_of_is_disabled).toBe(true);
    });

    it("Should display 'New artifact' when there is no artifact cross reference (creation mode)", () => {
        cross_reference = Option.nothing();
        const select = render();

        expect(getSelectMainOptionsGroup(select).label).toBe("New artifact");
    });

    it(`will dispatch a value-changed event when there's a change in the select`, () => {
        const select = render();
        select.value = `${IS_CHILD_LINK_TYPE} ${FORWARD_DIRECTION}`;
        select.dispatchEvent(new Event("change"));

        const event = dispatchEvent.mock.calls[0][0];
        expect(event.type).toBe("value-changed");
        expect(LinkType.isForwardChild(event.detail.new_link_type)).toBe(true);
    });
});
