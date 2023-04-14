/*
 * Copyright (c) Enalean, 2023 - present. All Rights Reserved.
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

import { html } from "hybrids";
import type { UpdateFunction } from "hybrids";
import type { User } from "@tuleap/plugin-pullrequest-rest-api-types";
import type { HelpRelativeDatesDisplay } from "../helpers/relative-dates-helper";

type CommentAuthor = Pick<User, "user_url" | "display_name">;

export const getHeaderTemplate = (
    comment_author: CommentAuthor,
    relative_date_helper: HelpRelativeDatesDisplay,
    post_date: string
): UpdateFunction<HTMLElement> => html`
    <div class="pull-request-comment-author-and-date" data-test="comment-header">
        <a
            class="pull-request-comment-author-name"
            data-test="comment-header-author"
            href="${comment_author.user_url}"
        >
            ${comment_author.display_name} </a
        >,
        <tlp-relative-date
            data-test="comment-header-date"
            class="pull-request-comment-date"
            date="${post_date}"
            absolute-date="${relative_date_helper.getFormattedDateUsingPreferredUserFormat(
                post_date
            )}"
            preference="${relative_date_helper.getRelativeDatePreference()}"
            locale="${relative_date_helper.getUserLocale()}"
            placement="${relative_date_helper.getRelativeDatePlacement()}"
        >
            ${relative_date_helper.getFormattedDateUsingPreferredUserFormat(post_date)}
        </tlp-relative-date>
    </div>
`;
