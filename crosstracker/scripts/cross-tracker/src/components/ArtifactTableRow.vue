<!--
  - Copyright (c) Enalean, 2018 - Present. All Rights Reserved.
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
        <td data-test="cross-tracker-results-artifact">
            <a class="direct-link-to-artifact" v-bind:href="artifact.badge.uri">
                <span class="cross-ref-badge link-to-tracker-badge" v-bind:class="badge_color">
                    {{ artifact.badge.cross_ref }}
                </span>
                {{ artifact.title }}
            </a>
        </td>
        <td>
            <a v-bind:href="'/' + artifact.project.uri" class="cross-tracker-project">
                {{ artifact.project.label }}
            </a>
        </td>
        <td>{{ artifact.status }}</td>
        <td class="cross-tracker-last-update-date">{{ artifact.formatted_last_update_date }}</td>
        <td><list-bind-user v-bind:user="artifact.submitted_by" /></td>
        <td>
            <list-bind-user
                v-for="user in artifact.assigned_to"
                v-bind:user="user"
                v-bind:key="user.id"
            />
        </td>
    </tr>
</template>
<script lang="ts">
import Vue from "vue";
import { Component, Prop } from "vue-property-decorator";
import type { Artifact } from "../type";
import ListBindUser from "./ListBindUser.vue";

@Component({ components: { ListBindUser } })
export default class ArtifactTableRow extends Vue {
    @Prop({ required: true })
    readonly artifact!: Artifact;

    get badge_color(): string {
        return "tlp-swatch-" + this.artifact.badge.color;
    }
}
</script>
