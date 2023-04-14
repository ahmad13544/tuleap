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

import { getJSON, getAllJSON, uri, patchJSON, put } from "@tuleap/fetch-result";
import type {
    PullRequest,
    User,
    TimelineItem,
    ReviewersCollection,
    PullRequestLabelsCollection,
    PullRequestLabel,
} from "@tuleap/plugin-pullrequest-rest-api-types";
import type { Fault } from "@tuleap/fault";
import type { ResultAsync } from "neverthrow";
import {
    PULL_REQUEST_STATUS_ABANDON,
    PULL_REQUEST_STATUS_MERGED,
    PULL_REQUEST_STATUS_REVIEW,
} from "@tuleap/plugin-pullrequest-constants";

interface TimelineItemsCollection {
    collection: ReadonlyArray<TimelineItem>;
}

export const fetchPullRequestInfo = (pullrequest_id: string): ResultAsync<PullRequest, Fault> => {
    return getJSON(uri`/api/v1/pull_requests/${encodeURIComponent(pullrequest_id)}`);
};

export const fetchUserInfo = (user_id: number): ResultAsync<User, Fault> => {
    return getJSON(uri`/api/v1/users/${encodeURIComponent(user_id)}`);
};

export const fetchPullRequestTimelineItems = (
    pullrequest_id: string
): ResultAsync<readonly TimelineItem[], Fault> => {
    return getAllJSON<TimelineItemsCollection, TimelineItem>(
        uri`/api/v1/pull_requests/${encodeURIComponent(pullrequest_id)}/timeline`,
        {
            params: { limit: 50, offset: 0 },
            getCollectionCallback: (
                payload: TimelineItemsCollection
            ): ReadonlyArray<TimelineItem> => payload.collection,
        }
    );
};

export const patchTitle = (
    pull_request_id: number,
    updated_title: string
): ResultAsync<PullRequest, Fault> => {
    return patchJSON(uri`/api/v1/pull_requests/${encodeURIComponent(pull_request_id)}`, {
        title: updated_title,
    });
};

export const fetchReviewersInfo = (
    pull_request_id: number
): ResultAsync<ReviewersCollection, Fault> => {
    return getJSON(uri`/api/v1/pull_requests/${encodeURIComponent(pull_request_id)}/reviewers`);
};

export const mergePullRequest = (pull_request_id: number): ResultAsync<PullRequest, Fault> => {
    return patchJSON<PullRequest>(
        uri`/api/v1/pull_requests/${encodeURIComponent(pull_request_id)}`,
        { status: PULL_REQUEST_STATUS_MERGED }
    );
};

export const reopenPullRequest = (pull_request_id: number): ResultAsync<PullRequest, Fault> => {
    return patchJSON<PullRequest>(
        uri`/api/v1/pull_requests/${encodeURIComponent(pull_request_id)}`,
        { status: PULL_REQUEST_STATUS_REVIEW }
    );
};

export const abandonPullRequest = (pull_request_id: number): ResultAsync<PullRequest, Fault> => {
    return patchJSON<PullRequest>(
        uri`/api/v1/pull_requests/${encodeURIComponent(pull_request_id)}`,
        { status: PULL_REQUEST_STATUS_ABANDON }
    );
};

export const fetchMatchingUsers = (query: string): ResultAsync<User[], Fault> => {
    return getJSON(uri`/api/v1/users`, {
        params: {
            query,
            limit: 10,
            offset: 0,
        },
    });
};

export const putReviewers = (
    pull_request_id: number,
    reviewers: ReadonlyArray<User>
): ResultAsync<Response, Fault> => {
    return put(
        uri`/api/v1/pull_requests/${encodeURIComponent(pull_request_id)}/reviewers`,
        {},
        {
            users: reviewers.map(({ id }) => ({ id })),
        }
    );
};

export const fetchPullRequestLabels = (
    pull_request_id: number
): ResultAsync<readonly PullRequestLabel[], Fault> => {
    return getAllJSON(uri`/api/v1/pull_requests/${encodeURIComponent(pull_request_id)}/labels`, {
        params: {
            limit: 50,
            offset: 0,
        },
        getCollectionCallback: (payload: PullRequestLabelsCollection) => {
            return payload.labels;
        },
    });
};
