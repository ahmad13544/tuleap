/**
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

import { shallowMount } from "@vue/test-utils";
import DisplayHistory from "./DisplayHistory.vue";
import HistoryLogs from "./HistoryLogs.vue";
import localVue from "../../helpers/local-vue";
import VueRouter from "vue-router";
import { createStoreMock } from "@tuleap/vuex-store-wrapper-jest";
import {
    TYPE_EMBEDDED,
    TYPE_EMPTY,
    TYPE_FILE,
    TYPE_FOLDER,
    TYPE_LINK,
    TYPE_WIKI,
} from "../../constants";

describe("DisplayHistory", () => {
    let store = {
        dispatch: jest.fn(),
    };

    it("should not display anything if user tries direct access while feature flag is off", async () => {
        const router = new VueRouter({
            routes: [
                {
                    path: "/history/42",
                    name: "item",
                },
            ],
        });

        store = createStoreMock({});

        store.dispatch.mockImplementation((action_name) => {
            if (action_name === "loadDocumentWithAscendentHierarchy") {
                return {
                    id: 42,
                };
            }

            return null;
        });

        const wrapper = shallowMount(DisplayHistory, {
            localVue,
            router,
            mocks: { $store: store },
            provide: {
                should_display_history_in_document: false,
            },
        });

        // wait for loadDocumentWithAscendentHierarchy() to be called
        await wrapper.vm.$nextTick();
        await wrapper.vm.$nextTick();

        expect(wrapper.element).toMatchInlineSnapshot(`<!---->`);
    });

    it("should display logs", async () => {
        const router = new VueRouter({
            routes: [
                {
                    path: "/history/42",
                    name: "item",
                },
            ],
        });

        store = createStoreMock({});

        store.dispatch.mockImplementation((action_name) => {
            if (action_name === "loadDocumentWithAscendentHierarchy") {
                return {
                    id: 42,
                };
            }

            return null;
        });

        const wrapper = shallowMount(DisplayHistory, {
            localVue,
            router,
            mocks: { $store: store },
            provide: {
                should_display_history_in_document: true,
            },
        });

        // wait for loadDocumentWithAscendentHierarchy() to be called
        await wrapper.vm.$nextTick();
        await wrapper.vm.$nextTick();

        expect(wrapper.findComponent(HistoryLogs).exists()).toBe(true);
    });

    it.each([
        [TYPE_FOLDER, false],
        [TYPE_FILE, true],
        [TYPE_LINK, true],
        [TYPE_EMBEDDED, true],
        [TYPE_WIKI, false],
        [TYPE_EMPTY, false],
    ])(
        `should display a Versions link for %s: %s`,
        async (type, should_versions_link_be_displayed) => {
            const router = new VueRouter({
                routes: [
                    {
                        path: "/history/42",
                        name: "item",
                    },
                ],
            });

            store = createStoreMock({});

            store.dispatch.mockImplementation((action_name) => {
                if (action_name === "loadDocumentWithAscendentHierarchy") {
                    return {
                        id: 42,
                        type,
                    };
                }

                return null;
            });

            const wrapper = shallowMount(DisplayHistory, {
                localVue,
                router,
                mocks: { $store: store },
                provide: {
                    should_display_history_in_document: true,
                },
            });

            // wait for loadDocumentWithAscendentHierarchy() to be called
            await wrapper.vm.$nextTick();
            await wrapper.vm.$nextTick();

            expect(wrapper.find("[data-test=versions-link]").exists()).toBe(
                should_versions_link_be_displayed
            );
        }
    );
});
