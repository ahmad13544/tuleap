<!--
  - Copyright (c) Enalean, 2020-Present. All Rights Reserved.
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
    <div
        ref="root"
        class="tlp-modal tlp-modal-danger"
        role="dialog"
        aria-labelledby="testplan-export-error-modal-title"
    >
        <div class="tlp-modal-header">
            <h1 id="testplan-export-error-modal-title" class="tlp-modal-title">
                {{ $gettext("Oops, there's an issue") }}
            </h1>
            <button
                class="tlp-modal-close"
                type="button"
                data-dismiss="modal"
                v-bind:aria-label="$gettext('Close')"
            >
                <i class="fas fa-times tlp-modal-close-icon" aria-hidden="true"></i>
            </button>
        </div>
        <div class="tlp-modal-body">
            <p>{{ $gettext("The export did not succeed, please try again.") }}</p>
        </div>
        <div class="tlp-modal-footer">
            <button
                type="button"
                class="tlp-button-danger tlp-button-outline tlp-modal-action"
                data-dismiss="modal"
            >
                {{ $gettext("Close") }}
            </button>
        </div>
    </div>
</template>
<script setup lang="ts">
import { createModal } from "tlp";
import { onMounted, ref } from "vue";

const root = ref<InstanceType<typeof Element>>();

onMounted((): void => {
    const modal_element = root.value;
    if (modal_element) {
        createModal(modal_element, { destroy_on_hide: true }).show();
    }
});
</script>
