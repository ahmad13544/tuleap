<!--
  - Copyright (c) Enalean, 2019 - present. All Rights Reserved.
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
  -
  -->
<template>
    <section class="empty-state-page">
        <div class="empty-state-illustration">
            <board-without-any-columns-error-for-admin-illustration />
        </div>
        <h1 class="empty-state-title">
            <translate>This taskboard is not properly configured</translate>
        </h1>
        <p class="empty-state-text">
            <translate>You have to configure the columns mapping.</translate>
        </p>
        <a class="tlp-button-primary empty-state-action" v-bind:href="admin_url">
            <i class="fas fa-long-arrow-alt-right tlp-button-icon" aria-hidden="true"></i>
            <translate>Define columns</translate>
        </a>
    </section>
</template>
<script lang="ts">
import Vue from "vue";
import { Component } from "vue-property-decorator";
import { State } from "vuex-class";
@Component({
    components: {
        "board-without-any-columns-error-for-admin-illustration": (): Promise<
            Record<string, unknown>
        > =>
            import(
                /* webpackChunkName: "taskboard-board-without-any-columns-error-for-admin-illustration" */ "./BoardWithoutAnyColumnsErrorForAdminIllustration.vue"
            ),
    },
})
export default class BoardWithoutAnyColumnsErrorForAdmin extends Vue {
    @State
    readonly admin_url!: string;
}
</script>
