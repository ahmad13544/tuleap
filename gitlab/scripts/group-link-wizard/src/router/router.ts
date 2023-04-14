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

import { createWebHistory, createRouter } from "vue-router";
import type { RouteRecordRaw, Router } from "vue-router";

import EmptyStateNoGitlabGroupLinked from "../components/EmptyStateNoGitlabGroupLinked.vue";
import PaneGitlabServer from "../components/PaneGitlabServer.vue";
import PaneGitlabGroup from "../components/PaneGitlabGroup.vue";
import PaneGitlabConfiguration from "../components/PaneGitlabConfiguration.vue";
import {
    STEP_GITLAB_SERVER,
    STEP_GITLAB_GROUP,
    NO_GROUP_LINKED_EMPTY_STATE,
    STEP_GITLAB_CONFIGURATION,
} from "../types";
import { ensureStepsHaveBeenCompletedInTheRightOrder } from "./steps-order-guard";

export function createInitializedRouter(base_url: string): Router {
    const routes: RouteRecordRaw[] = [
        {
            path: "/",
            name: NO_GROUP_LINKED_EMPTY_STATE,
            component: EmptyStateNoGitlabGroupLinked,
        },
        {
            path: buildPath(STEP_GITLAB_SERVER),
            name: STEP_GITLAB_SERVER,
            component: PaneGitlabServer,
        },
        {
            path: buildPath(STEP_GITLAB_GROUP),
            name: STEP_GITLAB_GROUP,
            component: PaneGitlabGroup,
        },
        {
            path: buildPath(STEP_GITLAB_CONFIGURATION),
            name: STEP_GITLAB_CONFIGURATION,
            component: PaneGitlabConfiguration,
        },
    ];

    const router = createRouter({
        history: createWebHistory(base_url),
        routes,
    });

    router.beforeEach(ensureStepsHaveBeenCompletedInTheRightOrder);

    return router;

    function buildPath(route: string): string {
        return "/" + route;
    }
}
