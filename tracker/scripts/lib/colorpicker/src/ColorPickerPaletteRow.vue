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
    <div class="colorpicker-row">
        <span
            class="colorpicker-circular-color"
            v-for="color_name in colors"
            v-bind:key="color_name"
            v-bind:class="[
                'colorpicker-circular-color-' + color_name,
                {
                    'fa fa-check': isCurrentColor(color_name),
                },
            ]"
            v-bind:title="color_name"
            v-on:click="updateColor(color_name)"
        ></span>
    </div>
</template>

<script setup lang="ts">
const props = defineProps<{ colors: string[]; selected_color: string }>();

const emit = defineEmits<{
    (e: "color-update", value: string): void;
}>();

function updateColor(color: string): void {
    emit("color-update", color);
}

function isCurrentColor(color_name: string): boolean {
    return props.selected_color === color_name;
}
</script>
