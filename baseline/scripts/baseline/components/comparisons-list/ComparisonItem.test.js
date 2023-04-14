/*
 * Copyright (c) Enalean, 2019-Present. All Rights Reserved.
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

import { createLocalVue, shallowMount } from "@vue/test-utils";
import ComparisonItem from "./ComparisonItem.vue";
import { create } from "../../support/factories";
import { createStoreMock } from "../../support/store-wrapper.test-helper";
import store_options from "../../store/store_options";
import ArtifactLink from "../common/ArtifactLink.vue";
import GettextPlugin from "vue-gettext";

describe("Comparison", () => {
    let $store;
    let $router;
    let localVue;

    let wrapper;

    const base_baseline_artifact = create("artifact");

    beforeEach(() => {
        $store = createStoreMock(store_options);
        $router = { push: jest.fn() };
        $store.getters = {
            findBaselineById: jest.fn(),
            findArtifactById: jest.fn(),
            findTrackerById: jest.fn(),
            findUserById: jest.fn(),
        };

        localVue = createLocalVue();
        localVue.use(GettextPlugin, {
            translations: {},
            silent: true,
        });
    });

    beforeEach(() => {
        $store.getters.findBaselineById.mockImplementation((id) => {
            if (id === 11) {
                return create("baseline", { artifact_id: 22 });
            }
            if (id === 12) {
                return create("baseline");
            }
            throw new Error("Not expected ID: " + id);
        });
        $store.getters.findArtifactById.mockImplementation((id) => {
            if (id === 22) {
                return base_baseline_artifact;
            }
            throw new Error("Not expected ID: " + id);
        });
        $store.getters.findTrackerById.mockReturnValue(create("tracker"));

        wrapper = shallowMount(ComparisonItem, {
            propsData: {
                comparison: create("comparison", "saved", {
                    id: 1,
                    base_baseline_id: 11,
                    compared_to_baseline_id: 12,
                }),
            },
            localVue,
            mocks: { $store, $router },
        });
    });

    it("shows base baseline as milestone", () => {
        expect(wrapper.findComponent(ArtifactLink).vm.artifact).toEqual(base_baseline_artifact);
    });
});
