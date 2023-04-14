/*
 * Copyright (c) Enalean, 2019 - present. All Rights Reserved.
 *
 *  This file is a part of Tuleap.
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

import type { Wrapper } from "@vue/test-utils";
import { shallowMount } from "@vue/test-utils";
import RootFolder from "./RootFolder.vue";
import { createStoreMock } from "@tuleap/vuex-store-wrapper-jest";
import localVue from "../../helpers/local-vue";

describe("RootFolder", () => {
    let store = {
        dispatch: jest.fn(),
        commit: jest.fn(),
    };

    function createWrapper(): Wrapper<RootFolder> {
        const store_options = {};
        store = createStoreMock(store_options);

        return shallowMount(RootFolder, {
            localVue,
            mocks: { $store: store },
        });
    }

    it(`Should load folder content`, (): void => {
        createWrapper();

        expect(store.dispatch).toHaveBeenCalledWith("loadRootFolder");
        expect(store.dispatch).toHaveBeenCalledWith("removeQuickLook");
        expect(store.commit).toHaveBeenCalledWith("resetAscendantHierarchy");
    });
});
