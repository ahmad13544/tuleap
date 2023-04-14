/*
 * Copyright (c) Enalean, 2019 - present. All Rights Reserved.
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

const emitMock = jest.fn();
jest.mock("../../../../helpers/emitter", () => {
    return {
        emit: emitMock,
    };
});

import type { Wrapper } from "@vue/test-utils";
import { shallowMount } from "@vue/test-utils";
import { createStoreMock } from "@tuleap/vuex-store-wrapper-jest";
import localVue from "../../../../helpers/local-vue";
import FolderDefaultPropertiesForUpdate from "./FolderDefaultPropertiesForUpdate.vue";
import { TYPE_FOLDER } from "../../../../constants";
import type { Folder, Property } from "../../../../type";
import type { ListValue } from "../../../../type";

describe("FolderDefaultPropertiesForUpdate", () => {
    let store = {
        dispatch: jest.fn(),
        commit: jest.fn(),
    };

    beforeEach(() => {
        emitMock.mockClear();
    });

    function createWrapper(
        is_status_property_used: boolean,
        has_loaded_properties: boolean,
        currentlyUpdatedItem: Folder,
        itemProperty: Array<Property>
    ): Wrapper<FolderDefaultPropertiesForUpdate> {
        const store_options = {
            state: {
                properties: { has_loaded_properties },
                configuration: { is_status_property_used },
            },
        };
        store = createStoreMock(store_options);

        return shallowMount(FolderDefaultPropertiesForUpdate, {
            localVue,
            propsData: {
                currentlyUpdatedItem,
                itemProperty,
                status_value: "",
                recursion_option: "",
            },
            mocks: { $store: store },
        });
    }

    describe("Component loading -", () => {
        it("Load project properties at first load", () => {
            const item = {
                properties: [] as Array<Property>,
                type: TYPE_FOLDER,
                title: "title",
            } as Folder;
            createWrapper(true, false, item, []);

            expect(store.dispatch).toHaveBeenCalledWith("properties/loadProjectProperties");
        });

        it(`Given custom component are loading
            Then it displays spinner`, async () => {
            const item = {
                properties: [] as Array<Property>,
                type: TYPE_FOLDER,
                title: "title",
            } as Folder;
            const wrapper = createWrapper(true, false, item, []);
            await wrapper.vm.$nextTick();

            expect(
                wrapper.find("[data-test=document-folder-default-properties-container]").exists()
            ).toBeTruthy();
            expect(
                wrapper.find("[data-test=document-folder-default-properties-spinner]").exists()
            ).toBeTruthy();
        });
    });

    describe("Component display -", () => {
        it(`Given project uses status, default properties are rendered`, () => {
            const list_value = {
                id: 103,
            } as ListValue;
            const property = {
                short_name: "status",
                list_value,
            } as unknown as Property;
            const item = {
                id: 123,
                title: "My title",
                description: "My description",
                properties: [property],
                status: {
                    value: "rejected",
                    recursion: "none",
                },
            } as Folder;

            const wrapper = createWrapper(true, true, item, []);

            expect(
                wrapper.find("[data-test=document-folder-default-properties-container]").exists()
            ).toBeTruthy();
        });
        it(`Given item has custom properties, default properties are rendered`, () => {
            const list_value = {
                id: 103,
            } as ListValue;
            const property = {
                short_name: "field_",
                list_value,
            } as unknown as Property;
            const item = {
                id: 123,
                title: "My title",
                description: "My description",
                properties: [property],
                status: {
                    value: "rejected",
                    recursion: "none",
                },
            } as Folder;

            const item_property = { short_name: "custom-property" } as Property;

            const wrapper = createWrapper(false, true, item, [item_property]);

            expect(
                wrapper.find("[data-test=document-folder-default-properties-container]").exists()
            ).toBeTruthy();
        });
        it(`Given item has no custom properties and status is not available, default properties are not rendered`, () => {
            const item = {
                id: 123,
                title: "My title",
                description: "My description",
                status: {
                    value: "rejected",
                    recursion: "none",
                },
            } as Folder;

            const wrapper = createWrapper(false, true, item, []);

            expect(
                wrapper.find("[data-test=document-folder-default-properties-container]").exists()
            ).toBeFalsy();
        });
    });

    describe("Apply bindings -", () => {
        it(`Emit event on check recursion for item`, () => {
            const list_value = {
                id: 103,
            } as ListValue;
            const property = {
                short_name: "field_",
                list_value,
            } as unknown as Property;
            const item = {
                id: 123,
                title: "My title",
                description: "My description",
                properties: [property],
                status: {
                    value: "rejected",
                    recursion: "none",
                },
            } as Folder;

            const item_property = {
                short_name: "field_",
                list_value,
            } as unknown as Property;
            const wrapper = createWrapper(true, true, item, [item_property]);

            expect(
                wrapper.find("[data-test=document-folder-default-properties-container]").exists()
            ).toBeTruthy();

            const input = wrapper.get("[data-test=document-custom-property-checkbox]");
            input.trigger("change");

            expect(emitMock).toHaveBeenCalledWith("properties-recursion-list", {
                detail: { property_list: [] },
            });
        });
    });
    describe("The checkbox value according to the recursion option -", () => {
        it(`Given "all_items" recursion option
        then all properties should be checked`, () => {
            const properties = [
                {
                    short_name: "field_1",
                    list_value: [
                        {
                            id: 103,
                        } as ListValue,
                    ],
                } as unknown as Property,
                {
                    short_name: "field_2",
                    value: "non",
                } as Property,
                {
                    short_name: "field_3",
                    list_value: [
                        {
                            id: 100,
                        } as ListValue,
                    ],
                } as unknown as Property,
            ];
            const item = {
                id: 123,
                title: "My title",
                description: "My description",
                properties,
                status: {
                    value: "rejected",
                    recursion: "none",
                },
            } as Folder;

            const item_property = [
                {
                    short_name: "field_1",
                    list_value: [103],
                } as unknown as Property,
                {
                    short_name: "field_2",
                    value: "non",
                } as Property,
                {
                    short_name: "field_3",
                    list_value: [100],
                } as unknown as Property,
            ];

            const wrapper = createWrapper(true, true, item, item_property);

            wrapper
                .find("[data-test=document-custom-property-recursion-option]")
                .vm.$emit("input", "all_items");

            expect(emitMock).toHaveBeenCalledWith("properties-recursion-list", {
                detail: {
                    property_list: ["field_1", "field_2", "field_3", "status"],
                },
            });
        });
    });

    it(`Given "all_items" recursion option
    then the status properties is not in the update list if the status is not enabled for the project`, () => {
        const properties = [
            {
                short_name: "field_1",
                list_value: [
                    {
                        id: 103,
                    } as ListValue,
                ],
            } as unknown as Property,
        ];
        const item = {
            id: 123,
            title: "My title",
            description: "My description",
            properties,
            status: {
                value: "rejected",
                recursion: "none",
            },
        } as Folder;

        const item_property = [
            {
                short_name: "field_1",
                list_value: [103],
            } as unknown as Property,
        ];

        const wrapper = createWrapper(false, true, item, item_property);

        wrapper
            .find("[data-test=document-custom-property-recursion-option]")
            .vm.$emit("input", "all_items");

        expect(emitMock).toHaveBeenCalledWith("properties-recursion-list", {
            detail: {
                property_list: ["field_1"],
            },
        });
    });

    it(`Given "all_items" recursion option
    then the status properties is in the update list if the status is enabled for the project`, () => {
        const properties = [
            {
                short_name: "field_1",
                list_value: [
                    {
                        id: 103,
                    } as ListValue,
                ],
            } as unknown as Property,
        ];
        const item = {
            id: 123,
            title: "My title",
            description: "My description",
            properties,
            status: {
                value: "rejected",
                recursion: "none",
            },
        } as Folder;

        const item_property = [
            {
                short_name: "field_1",
                list_value: [103],
            } as unknown as Property,
        ];

        const wrapper = createWrapper(true, true, item, item_property);

        wrapper
            .find("[data-test=document-custom-property-recursion-option]")
            .vm.$emit("input", "all_items");

        expect(emitMock).toHaveBeenCalledWith("properties-recursion-list", {
            detail: {
                property_list: ["field_1", "status"],
            },
        });
    });

    it(`Given "all_items" recursion option
    then the status recursion checkbox must emit a status recursion update`, () => {
        const properties = [
            {
                short_name: "field_1",
                list_value: [
                    {
                        id: 103,
                    } as ListValue,
                ],
            } as unknown as Property,
        ];
        const item = {
            id: 123,
            title: "My title",
            description: "My description",
            properties,
            status: {
                value: "rejected",
                recursion: "none",
            },
        } as Folder;

        const item_property = [
            {
                short_name: "field_1",
                list_value: [103],
            } as unknown as Property,
        ];

        const wrapper = createWrapper(true, true, item, item_property);

        wrapper
            .find("[data-test=document-custom-property-recursion-option]")
            .vm.$emit("input", "all_items");

        wrapper.find("[data-test=document-status-property-recursion-input]").setChecked(false);

        expect(emitMock).toHaveBeenCalledWith("update-status-recursion", false);
    });

    it(`Given "none" recursion option
        then the status properties is not in the update list is empty, all the checkbox are unchecked`, () => {
        const properties = [
            {
                short_name: "field_1",
                list_value: [
                    {
                        id: 103,
                    } as ListValue,
                ],
            } as unknown as Property,
        ];
        const item = {
            id: 123,
            title: "My title",
            description: "My description",
            properties,
            status: {
                value: "rejected",
                recursion: "none",
            },
        } as Folder;

        const item_property = [
            {
                short_name: "field_1",
                list_value: [103],
            } as unknown as Property,
        ];

        const wrapper = createWrapper(false, true, item, item_property);

        wrapper
            .find("[data-test=document-custom-property-recursion-option]")
            .vm.$emit("input", "all_items");

        expect(emitMock).toHaveBeenCalledWith("properties-recursion-list", {
            detail: {
                property_list: ["field_1"],
            },
        });

        wrapper
            .find("[data-test=document-custom-property-recursion-option]")
            .vm.$emit("input", "none");

        expect(emitMock).toHaveBeenCalledWith("properties-recursion-list", {
            detail: {
                property_list: [],
            },
        });
    });
});
