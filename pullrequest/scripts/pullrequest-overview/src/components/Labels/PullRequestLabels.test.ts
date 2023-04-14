/*
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

import { describe, it, expect, beforeEach, vi } from "vitest";
import type { SpyInstance } from "vitest";
import { okAsync, errAsync } from "neverthrow";
import { mount } from "@vue/test-utils";
import type { VueWrapper } from "@vue/test-utils";
import { Fault } from "@tuleap/fault";
import * as strict_inject from "@tuleap/vue-strict-inject";
import type { PullRequestLabel } from "@tuleap/plugin-pullrequest-rest-api-types";
import * as tuleap_api from "../../api/tuleap-rest-querier";
import { getGlobalTestOptions } from "../../../tests/helpers/global-options-for-tests";
import { DISPLAY_TULEAP_API_ERROR, PULL_REQUEST_ID_KEY } from "../../constants";
import PullRequestLabels from "./PullRequestLabels.vue";

const pull_request_id = 50;
const labels: PullRequestLabel[] = [
    {
        id: 1,
        label: "Emergency",
        is_outline: false,
        color: "red-wine",
    },
    {
        id: 2,
        label: "Easy fix",
        is_outline: true,
        color: "acid-green",
    },
];

vi.mock("@tuleap/vue-strict-inject");

describe("PullRequestLabels", () => {
    let display_error_callback: SpyInstance;

    const getWrapper = (): VueWrapper => {
        vi.spyOn(strict_inject, "strictInject").mockImplementation((key) => {
            switch (key) {
                case PULL_REQUEST_ID_KEY:
                    return String(pull_request_id);
                case DISPLAY_TULEAP_API_ERROR:
                    return display_error_callback;
                default:
                    throw new Error("Tried to strictInject a value while it was not mocked");
            }
        });

        return mount(PullRequestLabels, {
            global: {
                ...getGlobalTestOptions(),
            },
        });
    };

    beforeEach(() => {
        display_error_callback = vi.fn();
    });

    it("should display a skeleton while the labels are loading, and display them when it is done loading", async () => {
        vi.spyOn(tuleap_api, "fetchPullRequestLabels").mockReturnValue(okAsync(labels));

        const wrapper = getWrapper();

        await wrapper.vm.$nextTick();
        expect(wrapper.find("[data-test=pullrequest-property-skeleton]").exists()).toBe(true);

        await wrapper.vm.$nextTick();
        const displayed_labels = wrapper.findAll("[data-test=pull-request-label]");

        expect(wrapper.find("[data-test=pullrequest-property-skeleton]").exists()).toBe(false);
        expect(displayed_labels).toHaveLength(labels.length);

        const [emergency_label, easy_fix_label] = displayed_labels;

        expect(emergency_label.classes("tlp-badge-outline")).toBe(false);
        expect(emergency_label.classes("tlp-badge-red-wine")).toBe(true);
        expect(emergency_label.text()).toBe("Emergency");

        expect(easy_fix_label.classes("tlp-badge-outline")).toBe(true);
        expect(easy_fix_label.classes("tlp-badge-acid-green")).toBe(true);
        expect(easy_fix_label.text()).toBe("Easy fix");
    });

    it("should display an empty state text when there are no labels assigned to the pull-request yet", async () => {
        vi.spyOn(tuleap_api, "fetchPullRequestLabels").mockReturnValue(okAsync([]));

        const wrapper = getWrapper();
        await wrapper.vm.$nextTick();
        await wrapper.vm.$nextTick();

        expect(wrapper.find("[data-test=no-labels-yet-text]").exists()).toBe(true);
    });

    it("When an error occurres while retrieving the labels, then it should trigger the display error callback", async () => {
        const tuleap_api_fault = Fault.fromMessage("Forbidden");

        vi.spyOn(tuleap_api, "fetchPullRequestLabels").mockReturnValue(errAsync(tuleap_api_fault));

        const wrapper = getWrapper();
        await wrapper.vm.$nextTick();

        expect(wrapper.find("[data-test=pullrequest-property-skeleton]").exists()).toBe(true);

        await wrapper.vm.$nextTick();

        expect(wrapper.find("[data-test=pullrequest-property-skeleton]").exists()).toBe(false);
        expect(display_error_callback).toHaveBeenCalledOnce();
        expect(display_error_callback).toHaveBeenCalledWith(tuleap_api_fault);
    });
});
