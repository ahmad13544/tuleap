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

import { describe, it, expect, beforeEach, vi } from "vitest";
import { Fault } from "@tuleap/fault";
import type { PullRequestComment } from "@tuleap/plugin-pullrequest-rest-api-types";
import { TYPE_GLOBAL_COMMENT } from "@tuleap/plugin-pullrequest-constants";

import type { PullRequestCommentErrorCallback } from "../types";
import type { FocusTextArea } from "../helpers/textarea-focus-helper";
import { FocusTextareaStub } from "../../tests/stubs/FocusTextareaStub";
import { SaveNewCommentStub } from "../../tests/stubs/SaveNewCommentStub";

import { NewCommentFormPresenter } from "./NewCommentFormPresenter";
import { NewCommentFormController } from "./NewCommentFormController";
import type { SaveNewComment } from "./NewCommentSaver";
import type { NewCommentForm } from "./NewCommentForm";
import type {
    ControlNewCommentForm,
    NewCommentCancelCallback,
    NewCommentFormComponentConfig,
    NewCommentPostSubmitCallback,
} from "./NewCommentFormController";
import { NewCommentFormComponentConfigStub } from "../../tests/stubs/NewCommentFormComponentConfigStub";

const author = { avatar_url: "url/to/user_avatar.png" };

describe("NewCommentFormController", () => {
    let config: NewCommentFormComponentConfig,
        on_error_callback: PullRequestCommentErrorCallback,
        on_cancel_callback: NewCommentCancelCallback,
        post_submit_callback: NewCommentPostSubmitCallback,
        focus_helper: FocusTextArea,
        host_content: HTMLElement;

    const getController = (
        new_comment_saver: SaveNewComment = SaveNewCommentStub.withDefault()
    ): ControlNewCommentForm =>
        NewCommentFormController(
            new_comment_saver,
            focus_helper,
            author,
            config,
            post_submit_callback,
            on_error_callback,
            on_cancel_callback
        );

    const getEmptyPresenter = (): NewCommentFormPresenter =>
        NewCommentFormPresenter.buildFromAuthor(author, config);

    beforeEach(() => {
        config = NewCommentFormComponentConfigStub.withCancelActionAllowed();
        on_error_callback = vi.fn();
        on_cancel_callback = vi.fn();
        post_submit_callback = vi.fn();
        focus_helper = FocusTextareaStub();
        host_content = document.implementation.createHTMLDocument().createElement("div");
    });

    describe("buildInitialPresenter()", () => {
        it.each([
            [
                "is_autofocus_enabled and is_cancel_allowed set to true",
                "assign the host a new presenter and focus the textarea",
                NewCommentFormComponentConfigStub.withCancelActionAllowed(),
                1,
            ],
            [
                "is_autofocus_enabled and is_cancel_allowed set to false",
                "only assign the host a new presenter",
                NewCommentFormComponentConfigStub.withCancelActionDisallowed(),
                0,
            ],
        ])(
            `Given that the config has options %s
            Then it should %s`,
            (given, expected, given_config, nb_times_focus_textarea) => {
                config = given_config;
                const host = {
                    content: () => host_content,
                } as unknown as NewCommentForm;

                vi.useFakeTimers();
                getController().buildInitialPresenter(host);
                vi.advanceTimersToNextTimer();

                expect(host.presenter).toStrictEqual(getEmptyPresenter());
                expect(focus_helper.focusTextArea).toHaveBeenCalledTimes(nb_times_focus_textarea);
            }
        );
    });

    describe("cancelNewComment()", () => {
        it("Should assign the host a new empty presenter, and call the on_cancel_callback", () => {
            const host = {} as NewCommentForm;

            getController().cancelNewComment(host);

            expect(host.presenter).toStrictEqual(getEmptyPresenter());
            expect(on_cancel_callback).toHaveBeenCalledOnce();
        });
    });

    describe("updateNewComment()", () => {
        it("Should assign the host a new empty presenter, and call the on_cancel_callback", () => {
            const host = { presenter: getEmptyPresenter() } as NewCommentForm;
            const new_comment = "This is a new comment";

            getController().updateNewComment(host, new_comment);

            expect(host.presenter).toStrictEqual(
                NewCommentFormPresenter.buildWithUpdatedComment(getEmptyPresenter(), new_comment)
            );
        });
    });

    describe("updateWritingZoneState()", () => {
        it("Should update the writing zone state", () => {
            const is_writing_zone_currently_focused = true;
            const presenter = NewCommentFormPresenter.buildWithUpdatedWritingZoneState(
                getEmptyPresenter(),
                is_writing_zone_currently_focused
            );
            const host = { presenter } as NewCommentForm;

            getController().updateWritingZoneState(host, !is_writing_zone_currently_focused);

            expect(host.presenter).toStrictEqual(
                NewCommentFormPresenter.buildWithUpdatedWritingZoneState(
                    getEmptyPresenter(),
                    !is_writing_zone_currently_focused
                )
            );
        });
    });

    describe("saveNewComment()", () => {
        it(`When the comment is saved successfully
            Then it should call the post_submit_callback with the PullRequestComment
            And reset the textarea + the presenter`, async () => {
            const comment_content = "This is what I have to say";
            const host = {
                presenter: NewCommentFormPresenter.buildWithUpdatedComment(
                    getEmptyPresenter(),
                    comment_content
                ),
                content: () => host_content,
            } as NewCommentForm;

            const comment_saver = SaveNewCommentStub.withResponsePayload({
                id: 15,
                type: TYPE_GLOBAL_COMMENT,
                content: comment_content,
            } as PullRequestComment);

            await getController(comment_saver).saveNewComment(host);

            expect(post_submit_callback).toHaveBeenCalledOnce();
            expect(focus_helper.resetTextArea).toHaveBeenCalledOnce();
            expect(host.presenter).toStrictEqual(getEmptyPresenter());
        });

        it(`When the comment is saved with error
            Then it should call the on_error_callback with the Fault`, async () => {
            const presenter = NewCommentFormPresenter.buildWithUpdatedComment(
                getEmptyPresenter(),
                "This is a comment"
            );
            const host = {
                presenter,
            } as NewCommentForm;
            const tuleap_api_fault = Fault.fromMessage("Forbidden");

            await getController(SaveNewCommentStub.withFault(tuleap_api_fault)).saveNewComment(
                host
            );

            expect(on_error_callback).toHaveBeenCalledOnce();
            expect(on_error_callback).toHaveBeenCalledWith(tuleap_api_fault);
            expect(host.presenter).toStrictEqual(
                NewCommentFormPresenter.buildNotSavingComment(presenter)
            );
        });
    });
});
