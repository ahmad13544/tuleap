/*
 * Copyright (c) Enalean, 2020-Present. All Rights Reserved.
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

import path from "node:path";
import { fileURLToPath } from "node:url";
import { webpack_configurator } from "@tuleap/build-system-configurator";
import POGettextPlugin from "@tuleap/po-gettext-plugin";

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

const entry_points = {
    "create-pullrequest-button": "./src/index.js",
    "repository-style": "./themes/style.scss",
};

export default [
    {
        entry: entry_points,
        context: path.resolve(__dirname),
        output: webpack_configurator.configureOutput(path.resolve(__dirname, "./frontend-assets/")),
        externals: {
            tlp: "tlp",
        },
        module: {
            rules: [
                webpack_configurator.rule_scss_loader,
                webpack_configurator.rule_css_assets,
                webpack_configurator.rule_vue_loader,
            ],
        },
        plugins: [
            webpack_configurator.getCleanWebpackPlugin(),
            webpack_configurator.getManifestPlugin(),
            POGettextPlugin.webpack(),
            ...webpack_configurator.getCSSExtractionPlugins(),
            webpack_configurator.getVueLoaderPlugin(),
        ],
    },
];
