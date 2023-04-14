/*
 * Copyright (c) Enalean, 2022-Present. All Rights Reserved.
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

import type { Option } from "@tuleap/option";
import type { Fault } from "@tuleap/fault";
import { LinkedArtifactCollectionPresenter } from "./LinkedArtifactCollectionPresenter";
import type { RetrieveAllLinkedArtifacts } from "../../../../domain/fields/link-field/RetrieveAllLinkedArtifacts";
import type {
    LinkedArtifact,
    LinkedArtifactIdentifier,
} from "../../../../domain/fields/link-field/LinkedArtifact";
import { LinkedArtifactPresenter } from "./LinkedArtifactPresenter";
import type { AddLinkMarkedForRemoval } from "../../../../domain/fields/link-field/AddLinkMarkedForRemoval";
import type { DeleteLinkMarkedForRemoval } from "../../../../domain/fields/link-field/DeleteLinkMarkedForRemoval";
import type { VerifyLinkIsMarkedForRemoval } from "../../../../domain/fields/link-field/VerifyLinkIsMarkedForRemoval";
import type { RetrieveLinkedArtifactsSync } from "../../../../domain/fields/link-field/RetrieveLinkedArtifactsSync";
import { LinkRetrievalFault } from "../../../../domain/fields/link-field/LinkRetrievalFault";
import { LinkFieldPresenter } from "./LinkFieldPresenter";
import type { ArtifactLinkFieldInfo } from "../../../../domain/fields/link-field/ArtifactLinkFieldInfo";
import type { ArtifactCrossReference } from "../../../../domain/ArtifactCrossReference";
import type { LinkableArtifact } from "../../../../domain/fields/link-field/LinkableArtifact";
import { NewLinkCollectionPresenter } from "./NewLinkCollectionPresenter";
import type { AddNewLink } from "../../../../domain/fields/link-field/AddNewLink";
import type { RetrieveNewLinks } from "../../../../domain/fields/link-field/RetrieveNewLinks";
import { NewLink } from "../../../../domain/fields/link-field/NewLink";
import { LinkType } from "../../../../domain/fields/link-field/LinkType";
import type { DeleteNewLink } from "../../../../domain/fields/link-field/DeleteNewLink";
import { CollectionOfAllowedLinksTypesPresenters } from "./CollectionOfAllowedLinksTypesPresenters";
import type { VerifyHasParentLink } from "../../../../domain/fields/link-field/VerifyHasParentLink";
import type { RetrievePossibleParents } from "../../../../domain/fields/link-field/RetrievePossibleParents";
import type { CurrentTrackerIdentifier } from "../../../../domain/CurrentTrackerIdentifier";
import type { VerifyIsAlreadyLinked } from "../../../../domain/fields/link-field/VerifyIsAlreadyLinked";
import type { LinkTypesCollection } from "../../../../domain/fields/link-field/LinkTypesCollection";
import type { DispatchEvents } from "../../../../domain/DispatchEvents";
import { WillDisableSubmit } from "../../../../domain/submit/WillDisableSubmit";
import { WillEnableSubmit } from "../../../../domain/submit/WillEnableSubmit";
import { getSubmitDisabledForLinksReason } from "../../../../gettext-catalog";
import { WillClearFaultNotification } from "../../../../domain/WillClearFaultNotification";
import { WillNotifyFault } from "../../../../domain/WillNotifyFault";
import type { ChangeNewLinkType } from "../../../../domain/fields/link-field/ChangeNewLinkType";
import type { ChangeLinkType } from "../../../../domain/fields/link-field/ChangeLinkType";
import type { ParentTrackerIdentifier } from "../../../../domain/fields/link-field/ParentTrackerIdentifier";

export type LinkFieldControllerType = {
    getCurrentArtifactReference(): Option<ArtifactCrossReference>;
    displayField(): LinkFieldPresenter;
    displayLinkedArtifacts(): PromiseLike<LinkedArtifactCollectionPresenter>;
    displayAllowedTypes(): CollectionOfAllowedLinksTypesPresenters;
    canMarkForRemoval(link: LinkedArtifact): boolean;
    markForRemoval(artifact_id: LinkedArtifactIdentifier): LinkedArtifactCollectionPresenter;
    unmarkForRemoval(artifact_id: LinkedArtifactIdentifier): LinkedArtifactCollectionPresenter;
    canChangeType(link: LinkedArtifact): boolean;
    changeLinkType(
        link: LinkedArtifact,
        new_link_type: LinkType
    ): LinkedArtifactCollectionPresenter;
    addNewLink(artifact: LinkableArtifact, type: LinkType): NewLinkCollectionPresenter;
    removeNewLink(link: NewLink): NewLinkCollectionPresenter;
    changeNewLinkType(link: NewLink, new_link_type: LinkType): NewLinkCollectionPresenter;
    getPossibleParents(): PromiseLike<ReadonlyArray<LinkableArtifact>>;
    getCurrentLinkType(has_possible_parents: boolean): LinkType;
    clearFaultNotification(): void;
};

const isCreationModeFault = (fault: Fault): boolean =>
    "isCreationMode" in fault && fault.isCreationMode() === true;

const buildPresenter = (
    links_store: RetrieveLinkedArtifactsSync,
    deleted_link_verifier: VerifyLinkIsMarkedForRemoval
): LinkedArtifactCollectionPresenter => {
    const presenters = links_store
        .getLinkedArtifacts()
        .map((linked_artifact) =>
            LinkedArtifactPresenter.fromLinkedArtifact(
                linked_artifact,
                deleted_link_verifier.isMarkedForRemoval(linked_artifact)
            )
        );
    return LinkedArtifactCollectionPresenter.fromArtifacts(presenters);
};

export const LinkFieldController = (
    links_retriever: RetrieveAllLinkedArtifacts,
    links_store: RetrieveLinkedArtifactsSync,
    link_type_changer: ChangeLinkType,
    deleted_link_adder: AddLinkMarkedForRemoval,
    deleted_link_remover: DeleteLinkMarkedForRemoval,
    deleted_link_verifier: VerifyLinkIsMarkedForRemoval,
    new_link_adder: AddNewLink,
    new_link_remover: DeleteNewLink,
    new_links_retriever: RetrieveNewLinks,
    new_link_type_changer: ChangeNewLinkType,
    parent_verifier: VerifyHasParentLink,
    parents_retriever: RetrievePossibleParents,
    link_verifier: VerifyIsAlreadyLinked,
    event_dispatcher: DispatchEvents,
    field: ArtifactLinkFieldInfo,
    current_tracker_identifier: CurrentTrackerIdentifier,
    parent_tracker_identifier: Option<ParentTrackerIdentifier>,
    current_artifact_reference: Option<ArtifactCrossReference>,
    allowed_links_types_collection: LinkTypesCollection
): LinkFieldControllerType => ({
    getCurrentArtifactReference: () => current_artifact_reference,

    displayField: () => LinkFieldPresenter.fromField(field),

    getCurrentLinkType: (has_possible_parents: boolean): LinkType => {
        const reverse_child_type = allowed_links_types_collection.getReverseChildType();
        const is_tracker_in_a_hierarchy = parent_tracker_identifier.isValue();
        return reverse_child_type &&
            !parent_verifier.hasParentLink() &&
            (is_tracker_in_a_hierarchy || has_possible_parents)
            ? reverse_child_type
            : LinkType.buildUntyped();
    },

    displayAllowedTypes: () =>
        CollectionOfAllowedLinksTypesPresenters.fromCollectionOfAllowedLinkType(
            parent_verifier,
            allowed_links_types_collection
        ),

    displayLinkedArtifacts: (): PromiseLike<LinkedArtifactCollectionPresenter> => {
        event_dispatcher.dispatch(WillDisableSubmit(getSubmitDisabledForLinksReason()));
        return links_retriever.getLinkedArtifacts().match(
            (artifacts) => {
                event_dispatcher.dispatch(WillEnableSubmit());
                const presenters = artifacts.map((linked_artifact) =>
                    LinkedArtifactPresenter.fromLinkedArtifact(linked_artifact, false)
                );
                return LinkedArtifactCollectionPresenter.fromArtifacts(presenters);
            },
            (fault) => {
                if (isCreationModeFault(fault)) {
                    event_dispatcher.dispatch(WillEnableSubmit());
                } else {
                    event_dispatcher.dispatch(WillNotifyFault(LinkRetrievalFault(fault)));
                }
                return LinkedArtifactCollectionPresenter.forFault();
            }
        );
    },

    canMarkForRemoval(link): boolean {
        return !LinkType.isMirroredMilestone(link.link_type);
    },

    markForRemoval(artifact_identifier): LinkedArtifactCollectionPresenter {
        deleted_link_adder.addLinkMarkedForRemoval(artifact_identifier);
        return buildPresenter(links_store, deleted_link_verifier);
    },

    unmarkForRemoval(artifact_identifier): LinkedArtifactCollectionPresenter {
        deleted_link_remover.deleteLinkMarkedForRemoval(artifact_identifier);
        return buildPresenter(links_store, deleted_link_verifier);
    },

    canChangeType(link): boolean {
        return !LinkType.isMirroredMilestone(link.link_type);
    },

    changeLinkType(link, type): LinkedArtifactCollectionPresenter {
        link_type_changer.changeLinkType(link, type);
        return buildPresenter(links_store, deleted_link_verifier);
    },

    clearFaultNotification(): void {
        event_dispatcher.dispatch(WillClearFaultNotification());
    },

    addNewLink(artifact, type): NewLinkCollectionPresenter {
        new_link_adder.addNewLink(NewLink.fromLinkableArtifactAndType(artifact, type));
        return NewLinkCollectionPresenter.fromLinks(new_links_retriever.getNewLinks());
    },

    removeNewLink(link): NewLinkCollectionPresenter {
        new_link_remover.deleteNewLink(link);
        return NewLinkCollectionPresenter.fromLinks(new_links_retriever.getNewLinks());
    },

    changeNewLinkType(link, type): NewLinkCollectionPresenter {
        new_link_type_changer.changeNewLinkType(link, type);
        return NewLinkCollectionPresenter.fromLinks(new_links_retriever.getNewLinks());
    },

    getPossibleParents(): PromiseLike<ReadonlyArray<LinkableArtifact>> {
        return parents_retriever.getPossibleParents(current_tracker_identifier).match(
            (possible_parents) => possible_parents,
            (fault) => {
                event_dispatcher.dispatch(WillNotifyFault(fault));
                return [];
            }
        );
    },
});
