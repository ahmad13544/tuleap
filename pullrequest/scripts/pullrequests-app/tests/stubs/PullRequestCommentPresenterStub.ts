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

import {
    TYPE_EVENT_PULLREQUEST_ACTION,
    TYPE_GLOBAL_COMMENT,
    TYPE_INLINE_COMMENT,
    INLINE_COMMENT_POSITION_RIGHT,
} from "@tuleap/plugin-pullrequest-constants";

import type {
    PullRequestCommentPresenter,
    PullRequestInlineCommentPresenter,
    PullRequestGlobalCommentPresenter,
} from "@tuleap/plugin-pullrequest-comments";
import type { PullRequestCommentFile } from "@tuleap/plugin-pullrequest-comments";

const comment_presenter_base: PullRequestGlobalCommentPresenter = {
    id: 12,
    user: {
        id: 102,
        avatar_url: "https://example.com/John/Doe/avatar.png",
        display_name: "John Doe",
        user_url: "https://example.com/John/Doe/profile.html",
    },
    post_date: "a moment ago",
    content: "Please rebase",
    parent_id: 0,
    type: TYPE_GLOBAL_COMMENT,
    color: "",
};

const file = {
    file_path: "README.md",
    file_url: "url/to/readme.md",
    unidiff_offset: 8,
    position: INLINE_COMMENT_POSITION_RIGHT,
    is_displayed: false,
};

export const PullRequestCommentPresenterStub = {
    buildInlineCommentOutdated: (): PullRequestCommentPresenter => ({
        ...comment_presenter_base,
        file: { ...file },
        is_outdated: true,
        type: TYPE_INLINE_COMMENT,
    }),

    buildInlineComment: (): PullRequestCommentPresenter => ({
        ...comment_presenter_base,
        file: { ...file },
        is_outdated: false,
        type: TYPE_INLINE_COMMENT,
    }),

    buildGlobalComment: (): PullRequestCommentPresenter => ({
        ...comment_presenter_base,
        type: TYPE_GLOBAL_COMMENT,
    }),

    buildPullRequestEventComment: (): PullRequestCommentPresenter => ({
        ...comment_presenter_base,
        type: TYPE_EVENT_PULLREQUEST_ACTION,
    }),

    buildFileDiffCommentPresenter: (
        file_data: Partial<PullRequestCommentFile> = {},
        comment_id: number = comment_presenter_base.id
    ): PullRequestInlineCommentPresenter => ({
        ...comment_presenter_base,
        id: comment_id,
        type: TYPE_INLINE_COMMENT,
        is_outdated: false,
        file: {
            ...file,
            ...file_data,
        },
    }),
};
