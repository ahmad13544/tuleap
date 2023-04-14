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

import DOMPurify from "dompurify";
import { html } from "hybrids";
import type { UpdateFunction } from "hybrids";
import type { GettextProvider } from "@tuleap/gettext";
import { TYPE_INLINE_COMMENT } from "@tuleap/plugin-pullrequest-constants";
import type { PullRequestCommentPresenter } from "./PullRequestCommentPresenter";
import type { PullRequestCommentComponentType } from "./PullRequestComment";
import { getHeaderTemplate } from "../templates/CommentHeaderTemplate";

type MapOfClasses = Record<string, boolean>;

const displayFileNameIfNeeded = (
    comment: PullRequestCommentPresenter
): UpdateFunction<PullRequestCommentComponentType> => {
    if (
        comment.type !== TYPE_INLINE_COMMENT ||
        !comment.file.is_displayed ||
        comment.parent_id !== 0
    ) {
        return html``;
    }

    if (!comment.is_outdated) {
        return html`
            <div
                class="pull-request-comment-file-path"
                data-test="pullrequest-comment-with-link-to-file"
            >
                <a href="${comment.file.file_url}">
                    <i
                        class="pull-request-comment-file-path-icon fa-regular fa-file-alt"
                        aria-hidden="true"
                    ></i
                    >${comment.file.file_path}
                </a>
            </div>
        `;
    }

    return html`
        <div class="pull-request-comment-file-path" data-test="pullrequest-comment-only-file-name">
            <i
                class="pull-request-comment-file-path-icon fa-regular fa-file-alt"
                aria-hidden="true"
            ></i
            >${comment.file.file_path}
        </div>
    `;
};

const displayOutdatedBadgeIfNeeded = (
    host: PullRequestCommentComponentType,
    comment: PullRequestCommentPresenter,
    gettext_provider: GettextProvider
): UpdateFunction<PullRequestCommentComponentType> => {
    if (comment.type !== TYPE_INLINE_COMMENT) {
        return html``;
    }

    if (host.comment.id !== comment.id || !comment.is_outdated) {
        return html``;
    }

    return html`
        <span class="tlp-badge-secondary tlp-badge-outline" data-test="comment-outdated-badge">
            <i class="fa-solid fa-hourglass-end tlp-badge-icon" aria-hidden="true"></i>
            ${gettext_provider.gettext("Outdated")}
        </span>
    `;
};

const getBodyClasses = (host: PullRequestCommentComponentType): MapOfClasses => ({
    "pull-request-comment-outdated":
        host.comment.type === TYPE_INLINE_COMMENT && host.comment.is_outdated,
});

export const buildBodyForComment = (
    host: PullRequestCommentComponentType,
    comment: PullRequestCommentPresenter,
    gettext_provider: GettextProvider
): UpdateFunction<PullRequestCommentComponentType> => html`
    <div class="${getBodyClasses(host)}" data-test="pull-request-comment-body">
        <div class="pull-request-comment-content-info">
            ${getHeaderTemplate(comment.user, host.relative_date_helper, comment.post_date)}
            ${displayOutdatedBadgeIfNeeded(host, comment, gettext_provider)}
        </div>

        ${displayFileNameIfNeeded(comment)}

        <p
            class="pull-request-comment-text"
            data-test="pull-request-comment-text"
            innerHTML="${DOMPurify.sanitize(comment.content)}"
        ></p>
    </div>
`;

export const getCommentBody = (
    host: PullRequestCommentComponentType,
    gettext_provider: GettextProvider
): UpdateFunction<PullRequestCommentComponentType> =>
    buildBodyForComment(host, host.comment, gettext_provider);
