<!--
  - Copyright (c) Enalean, 2018-Present. All Rights Reserved.
  -
  - This file is a part of Tuleap.
  -
  - Tuleap is free software; you can redistribute it and/or modify
  - it under the terms of the GNU General Public License as published by
  - the Free Software Foundation; either version 2 of the License, or
  - (at your option) any later version.
  -
  - Tuleap is distributed in the hope that it will be useful,
  - but WITHOUT ANY WARRANTY; without even the implied warranty of
  - MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  - GNU General Public License for more details.
  -
  - You should have received a copy of the GNU General Public License
  - along with Tuleap. If not, see <http://www.gnu.org/licenses/>.
  -->

<template>
    <tr>
        <td>
            <a data-test="git-permissions-repository-link" v-bind:href="repositoryPermission.url">
                {{ repositoryPermission.name }}
            </a>
        </td>
        <td colspan="2"></td>
        <td>
            <git-permissions-badge
                v-for="group in repositoryPermission.readers"
                v-bind:key="group.ugroup_name"
                v-bind:is-project-admin="group.is_project_admin"
                v-bind:is-static="group.is_static"
                v-bind:is-custom="group.is_custom"
                v-bind:group-name="group.ugroup_name"
                v-bind:data-test="`git-permission-badge-${group.ugroup_name}`"
            />
        </td>
        <td></td>
        <td></td>
    </tr>
</template>
<script lang="ts">
import GitPermissionsBadge from "@tuleap/vue-permissions-per-group-badge";
import Vue from "vue";
import { Component, Prop } from "vue-property-decorator";
import type { RepositoryFineGrainedPermissions } from "./type";

@Component({ components: { GitPermissionsBadge } })
export default class GitRepositoryTableFineGrainedPermissionsRepository extends Vue {
    @Prop()
    readonly repositoryPermission!: RepositoryFineGrainedPermissions;
}
</script>
