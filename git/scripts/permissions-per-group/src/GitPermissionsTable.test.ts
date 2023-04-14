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

import type { Wrapper } from "@vue/test-utils";
import { shallowMount } from "@vue/test-utils";
import GitPermissionsTable from "./GitPermissionsTable.vue";
import localVueForTest from "./helper/local-vue-for-test";

describe("GitPermissionsTable", () => {
    let propsData = {};

    function instantiateComponent(): Wrapper<GitPermissionsTable> {
        return shallowMount(GitPermissionsTable, {
            propsData,
            localVue: localVueForTest,
        });
    }

    it("When there are no repositories, Then empty state is displayed", () => {
        propsData = {
            repositories: [],
            selectedUgroupName: "Project Member",
        };

        const wrapper = instantiateComponent();

        expect(wrapper.find("[data-test=git-permission-table-empty-state]").text()).toBe(
            "Project Member has no permission for any repository in this project"
        );
    });

    it("When there are no repository and no ugroup selected, Then empty state is displayed", () => {
        propsData = {
            repositories: [],
            selectedUgroupName: "",
        };

        const wrapper = instantiateComponent();

        expect(wrapper.find("[data-test=git-permission-table-empty-state]").text()).toBe(
            "No repository found for project"
        );
    });

    it("When all repository are hidden, Then empty state is displayed", async () => {
        propsData = {
            repositories: [{ name: "repo" }],
            selectedUgroupName: "",
        };

        const wrapper = instantiateComponent();
        wrapper.setData({
            nb_repo_hidden: 1,
        });

        await wrapper.vm.$nextTick();

        expect(wrapper.find("[data-test=git-permission-table-empty-state]").text()).toBe(
            "There isn't any matching repository"
        );
    });
});
