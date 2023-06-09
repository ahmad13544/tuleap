<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc03ef7277b6d83037bb5ac34c4aadd69
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tuleap\\PullRequest\\Tests\\' => 25,
            'Tuleap\\PullRequest\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tuleap\\PullRequest\\Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests/unit',
        ),
        'Tuleap\\PullRequest\\' => 
        array (
            0 => __DIR__ . '/../..' . '/include',
            1 => __DIR__ . '/../..' . '/include/PullRequest',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Tuleap\\PullRequest\\Authorization\\PullRequestPermissionChecker' => __DIR__ . '/../..' . '/include/PullRequest/Authorization/PullRequestPermissionChecker.php',
        'Tuleap\\PullRequest\\Authorization\\UserCannotMergePullRequestException' => __DIR__ . '/../..' . '/include/PullRequest/Authorization/UserCannotMergePullRequestException.php',
        'Tuleap\\PullRequest\\BranchUpdate\\CommitPresenter' => __DIR__ . '/../..' . '/include/PullRequest/BranchUpdate/CommitPresenter.php',
        'Tuleap\\PullRequest\\BranchUpdate\\PullRequestUpdateCommitDiff' => __DIR__ . '/../..' . '/include/PullRequest/BranchUpdate/PullRequestUpdateCommitDiff.php',
        'Tuleap\\PullRequest\\BranchUpdate\\PullRequestUpdatedContentPresenter' => __DIR__ . '/../..' . '/include/PullRequest/BranchUpdate/PullRequestUpdatedContentPresenter.php',
        'Tuleap\\PullRequest\\BranchUpdate\\PullRequestUpdatedEvent' => __DIR__ . '/../..' . '/include/PullRequest/BranchUpdate/PullRequestUpdatedEvent.php',
        'Tuleap\\PullRequest\\BranchUpdate\\PullRequestUpdatedNotification' => __DIR__ . '/../..' . '/include/PullRequest/BranchUpdate/PullRequestUpdatedNotification.php',
        'Tuleap\\PullRequest\\BranchUpdate\\PullRequestUpdatedNotificationToProcessBuilder' => __DIR__ . '/../..' . '/include/PullRequest/BranchUpdate/PullRequestUpdatedNotificationToProcessBuilder.php',
        'Tuleap\\PullRequest\\BranchUpdate\\RepositoryURLToCommitBuilder' => __DIR__ . '/../..' . '/include/PullRequest/BranchUpdate/RepositoryURLToCommitBuilder.php',
        'Tuleap\\PullRequest\\Comment\\Comment' => __DIR__ . '/../..' . '/include/PullRequest/Comment/Comment.php',
        'Tuleap\\PullRequest\\Comment\\Dao' => __DIR__ . '/../..' . '/include/PullRequest/Comment/Dao.php',
        'Tuleap\\PullRequest\\Comment\\Factory' => __DIR__ . '/../..' . '/include/PullRequest/Comment/Factory.php',
        'Tuleap\\PullRequest\\Comment\\Notification\\PullRequestNewCommentContentPresenter' => __DIR__ . '/../..' . '/include/PullRequest/Comment/Notification/PullRequestNewCommentContentPresenter.php',
        'Tuleap\\PullRequest\\Comment\\Notification\\PullRequestNewCommentEvent' => __DIR__ . '/../..' . '/include/PullRequest/Comment/Notification/PullRequestNewCommentEvent.php',
        'Tuleap\\PullRequest\\Comment\\Notification\\PullRequestNewCommentNotification' => __DIR__ . '/../..' . '/include/PullRequest/Comment/Notification/PullRequestNewCommentNotification.php',
        'Tuleap\\PullRequest\\Comment\\Notification\\PullRequestNewCommentNotificationToProcessBuilder' => __DIR__ . '/../..' . '/include/PullRequest/Comment/Notification/PullRequestNewCommentNotificationToProcessBuilder.php',
        'Tuleap\\PullRequest\\Comment\\PaginatedComments' => __DIR__ . '/../..' . '/include/PullRequest/Comment/PaginatedComments.php',
        'Tuleap\\PullRequest\\Comment\\ParentCommentSearcher' => __DIR__ . '/../..' . '/include/PullRequest/Comment/ParentCommentSearcher.php',
        'Tuleap\\PullRequest\\Comment\\ThreadColorUpdater' => __DIR__ . '/../..' . '/include/PullRequest/Comment/ThreadColorUpdater.php',
        'Tuleap\\PullRequest\\Comment\\ThreadCommentDao' => __DIR__ . '/../..' . '/include/PullRequest/Comment/ThreadCommentDao.php',
        'Tuleap\\PullRequest\\Criterion\\ISearchOnStatus' => __DIR__ . '/../..' . '/include/PullRequest/Criterion/ISearchOnStatus.php',
        'Tuleap\\PullRequest\\Criterion\\StatusAll' => __DIR__ . '/../..' . '/include/PullRequest/Criterion/StatusAll.php',
        'Tuleap\\PullRequest\\Criterion\\StatusClosed' => __DIR__ . '/../..' . '/include/PullRequest/Criterion/StatusClosed.php',
        'Tuleap\\PullRequest\\Criterion\\StatusOpen' => __DIR__ . '/../..' . '/include/PullRequest/Criterion/StatusOpen.php',
        'Tuleap\\PullRequest\\Dao' => __DIR__ . '/../..' . '/include/PullRequest/Dao.php',
        'Tuleap\\PullRequest\\DefaultSettings\\DefaultSettingsController' => __DIR__ . '/../..' . '/include/PullRequest/DefaultSettings/DefaultSettingsController.php',
        'Tuleap\\PullRequest\\DefaultSettings\\PullRequestPane' => __DIR__ . '/../..' . '/include/PullRequest/DefaultSettings/PullRequestPane.php',
        'Tuleap\\PullRequest\\DefaultSettings\\PullRequestPanePresenter' => __DIR__ . '/../..' . '/include/PullRequest/DefaultSettings/PullRequestPanePresenter.php',
        'Tuleap\\PullRequest\\Events\\PullRequestDiffRepresentationBuild' => __DIR__ . '/../..' . '/include/PullRequest/Events/PullRequestDiffRepresentationBuild.php',
        'Tuleap\\PullRequest\\Exception\\MalformedQueryParameterException' => __DIR__ . '/../..' . '/include/PullRequest/Exception/MalformedQueryParameterException.php',
        'Tuleap\\PullRequest\\Exception\\PullRequestAlreadyExistsException' => __DIR__ . '/../..' . '/include/PullRequest/Exception/PullRequestAlreadyExistsException.php',
        'Tuleap\\PullRequest\\Exception\\PullRequestAnonymousUserException' => __DIR__ . '/../..' . '/include/PullRequest/Exception/PullRequestAnonymousUserException.php',
        'Tuleap\\PullRequest\\Exception\\PullRequestCannotBeAbandoned' => __DIR__ . '/../..' . '/include/PullRequest/Exception/PullRequestCannotBeAbandoned.php',
        'Tuleap\\PullRequest\\Exception\\PullRequestCannotBeCreatedException' => __DIR__ . '/../..' . '/include/PullRequest/Exception/PullRequestCannotBeCreatedException.php',
        'Tuleap\\PullRequest\\Exception\\PullRequestCannotBeMerged' => __DIR__ . '/../..' . '/include/PullRequest/Exception/PullRequestCannotBeMerged.php',
        'Tuleap\\PullRequest\\Exception\\PullRequestCannotBeReopen' => __DIR__ . '/../..' . '/include/PullRequest/Exception/PullRequestCannotBeReopen.php',
        'Tuleap\\PullRequest\\Exception\\PullRequestNotCreatedException' => __DIR__ . '/../..' . '/include/PullRequest/Exception/PullRequestNotCreatedException.php',
        'Tuleap\\PullRequest\\Exception\\PullRequestNotFoundException' => __DIR__ . '/../..' . '/include/PullRequest/Exception/PullRequestNotFoundException.php',
        'Tuleap\\PullRequest\\Exception\\PullRequestRepositoryMigratedOnGerritException' => __DIR__ . '/../..' . '/include/PullRequest/Exception/PullRequestRepositoryMigratedOnGerritException.php',
        'Tuleap\\PullRequest\\Exception\\PullRequestTargetException' => __DIR__ . '/../..' . '/include/PullRequest/Exception/PullRequestTargetException.php',
        'Tuleap\\PullRequest\\Exception\\UnknownBranchNameException' => __DIR__ . '/../..' . '/include/PullRequest/Exception/UnknownBranchNameException.php',
        'Tuleap\\PullRequest\\Exception\\UserCannotReadGitRepositoryException' => __DIR__ . '/../..' . '/include/PullRequest/Exception/UserCannotReadGitRepositoryException.php',
        'Tuleap\\PullRequest\\Factory' => __DIR__ . '/../..' . '/include/PullRequest/Factory.php',
        'Tuleap\\PullRequest\\FileNullDiff' => __DIR__ . '/../..' . '/include/PullRequest/FileNullDiff.php',
        'Tuleap\\PullRequest\\FileUniDiff' => __DIR__ . '/../..' . '/include/PullRequest/FileUniDiff.php',
        'Tuleap\\PullRequest\\FileUniDiffBuilder' => __DIR__ . '/../..' . '/include/PullRequest/FileUniDiffBuilder.php',
        'Tuleap\\PullRequest\\GetCreatePullRequest' => __DIR__ . '/../..' . '/include/PullRequest/GetCreatePullRequest.php',
        'Tuleap\\PullRequest\\GitExec' => __DIR__ . '/../..' . '/include/PullRequest/GitExec.php',
        'Tuleap\\PullRequest\\GitExecFactory' => __DIR__ . '/../..' . '/include/PullRequest/GitExecFactory.php',
        'Tuleap\\PullRequest\\GitReference\\GitPullRequestReference' => __DIR__ . '/../..' . '/include/PullRequest/GitReference/GitPullRequestReference.php',
        'Tuleap\\PullRequest\\GitReference\\GitPullRequestReferenceBulkConverter' => __DIR__ . '/../..' . '/include/PullRequest/GitReference/GitPullRequestReferenceBulkConverter.php',
        'Tuleap\\PullRequest\\GitReference\\GitPullRequestReferenceCreator' => __DIR__ . '/../..' . '/include/PullRequest/GitReference/GitPullRequestReferenceCreator.php',
        'Tuleap\\PullRequest\\GitReference\\GitPullRequestReferenceDAO' => __DIR__ . '/../..' . '/include/PullRequest/GitReference/GitPullRequestReferenceDAO.php',
        'Tuleap\\PullRequest\\GitReference\\GitPullRequestReferenceNamespaceAvailabilityChecker' => __DIR__ . '/../..' . '/include/PullRequest/GitReference/GitPullRequestReferenceNamespaceAvailabilityChecker.php',
        'Tuleap\\PullRequest\\GitReference\\GitPullRequestReferenceNotFoundException' => __DIR__ . '/../..' . '/include/PullRequest/GitReference/GitPullRequestReferenceNotFoundException.php',
        'Tuleap\\PullRequest\\GitReference\\GitPullRequestReferenceRemover' => __DIR__ . '/../..' . '/include/PullRequest/GitReference/GitPullRequestReferenceRemover.php',
        'Tuleap\\PullRequest\\GitReference\\GitPullRequestReferenceRetriever' => __DIR__ . '/../..' . '/include/PullRequest/GitReference/GitPullRequestReferenceRetriever.php',
        'Tuleap\\PullRequest\\GitReference\\GitPullRequestReferenceUpdater' => __DIR__ . '/../..' . '/include/PullRequest/GitReference/GitPullRequestReferenceUpdater.php',
        'Tuleap\\PullRequest\\GitReference\\GitReferenceNotFound' => __DIR__ . '/../..' . '/include/PullRequest/GitReference/GitReferenceNotFound.php',
        'Tuleap\\PullRequest\\GitRestRouteAdditionalInformations' => __DIR__ . '/../..' . '/include/PullRequest/GitRestRouteAdditionalInformations.php',
        'Tuleap\\PullRequest\\InlineComment\\Dao' => __DIR__ . '/../..' . '/include/PullRequest/InlineComment/Dao.php',
        'Tuleap\\PullRequest\\InlineComment\\InlineComment' => __DIR__ . '/../..' . '/include/PullRequest/InlineComment/InlineComment.php',
        'Tuleap\\PullRequest\\InlineComment\\InlineCommentCreator' => __DIR__ . '/../..' . '/include/PullRequest/InlineComment/InlineCommentCreator.php',
        'Tuleap\\PullRequest\\InlineComment\\InlineCommentRetriever' => __DIR__ . '/../..' . '/include/PullRequest/InlineComment/InlineCommentRetriever.php',
        'Tuleap\\PullRequest\\InlineComment\\InlineCommentUpdater' => __DIR__ . '/../..' . '/include/PullRequest/InlineComment/InlineCommentUpdater.php',
        'Tuleap\\PullRequest\\InlineComment\\InsertedInlineComment' => __DIR__ . '/../..' . '/include/PullRequest/InlineComment/InsertedInlineComment.php',
        'Tuleap\\PullRequest\\InlineComment\\Notification\\InlineCommentCodeContextException' => __DIR__ . '/../..' . '/include/PullRequest/InlineComment/Notification/InlineCommentCodeContextException.php',
        'Tuleap\\PullRequest\\InlineComment\\Notification\\InlineCommentCodeContextExtractor' => __DIR__ . '/../..' . '/include/PullRequest/InlineComment/Notification/InlineCommentCodeContextExtractor.php',
        'Tuleap\\PullRequest\\InlineComment\\Notification\\InlineCommentCodeContextRepositoryNotFoundException' => __DIR__ . '/../..' . '/include/PullRequest/InlineComment/Notification/InlineCommentCodeContextRepositoryNotFoundException.php',
        'Tuleap\\PullRequest\\InlineComment\\Notification\\PullRequestNewInlineCommentContentPresenter' => __DIR__ . '/../..' . '/include/PullRequest/InlineComment/Notification/PullRequestNewInlineCommentContentPresenter.php',
        'Tuleap\\PullRequest\\InlineComment\\Notification\\PullRequestNewInlineCommentEvent' => __DIR__ . '/../..' . '/include/PullRequest/InlineComment/Notification/PullRequestNewInlineCommentEvent.php',
        'Tuleap\\PullRequest\\InlineComment\\Notification\\PullRequestNewInlineCommentNotification' => __DIR__ . '/../..' . '/include/PullRequest/InlineComment/Notification/PullRequestNewInlineCommentNotification.php',
        'Tuleap\\PullRequest\\InlineComment\\Notification\\PullRequestNewInlineCommentNotificationToProcessBuilder' => __DIR__ . '/../..' . '/include/PullRequest/InlineComment/Notification/PullRequestNewInlineCommentNotificationToProcessBuilder.php',
        'Tuleap\\PullRequest\\Label\\LabeledItemCollector' => __DIR__ . '/../..' . '/include/PullRequest/Label/LabeledItemCollector.php',
        'Tuleap\\PullRequest\\Label\\LabeledPullRequestPresenter' => __DIR__ . '/../..' . '/include/PullRequest/Label/LabeledPullRequestPresenter.php',
        'Tuleap\\PullRequest\\Label\\LabelsCurlyCoatedRetriever' => __DIR__ . '/../..' . '/include/PullRequest/Label/LabelsCurlyCoatedRetriever.php',
        'Tuleap\\PullRequest\\Label\\PullRequestLabelDao' => __DIR__ . '/../..' . '/include/PullRequest/Label/PullRequestLabelDao.php',
        'Tuleap\\PullRequest\\MergeSetting\\MergeSetting' => __DIR__ . '/../..' . '/include/PullRequest/MergeSetting/MergeSetting.php',
        'Tuleap\\PullRequest\\MergeSetting\\MergeSettingDAO' => __DIR__ . '/../..' . '/include/PullRequest/MergeSetting/MergeSettingDAO.php',
        'Tuleap\\PullRequest\\MergeSetting\\MergeSettingDefault' => __DIR__ . '/../..' . '/include/PullRequest/MergeSetting/MergeSettingDefault.php',
        'Tuleap\\PullRequest\\MergeSetting\\MergeSettingRetriever' => __DIR__ . '/../..' . '/include/PullRequest/MergeSetting/MergeSettingRetriever.php',
        'Tuleap\\PullRequest\\MergeSetting\\MergeSettingWithValue' => __DIR__ . '/../..' . '/include/PullRequest/MergeSetting/MergeSettingWithValue.php',
        'Tuleap\\PullRequest\\NavigationTab\\NavigationTabPresenterBuilder' => __DIR__ . '/../..' . '/include/PullRequest/NavigationTab/NavigationTabPresenterBuilder.php',
        'Tuleap\\PullRequest\\Notification\\EventDispatcherWithFallback' => __DIR__ . '/../..' . '/include/PullRequest/Notification/EventDispatcherWithFallback.php',
        'Tuleap\\PullRequest\\Notification\\EventSubjectToNotification' => __DIR__ . '/../..' . '/include/PullRequest/Notification/EventSubjectToNotification.php',
        'Tuleap\\PullRequest\\Notification\\EventSubjectToNotificationAsynchronousRedisDispatcher' => __DIR__ . '/../..' . '/include/PullRequest/Notification/EventSubjectToNotificationAsynchronousRedisDispatcher.php',
        'Tuleap\\PullRequest\\Notification\\EventSubjectToNotificationListener' => __DIR__ . '/../..' . '/include/PullRequest/Notification/EventSubjectToNotificationListener.php',
        'Tuleap\\PullRequest\\Notification\\EventSubjectToNotificationListenerProvider' => __DIR__ . '/../..' . '/include/PullRequest/Notification/EventSubjectToNotificationListenerProvider.php',
        'Tuleap\\PullRequest\\Notification\\EventSubjectToNotificationSynchronousDispatcher' => __DIR__ . '/../..' . '/include/PullRequest/Notification/EventSubjectToNotificationSynchronousDispatcher.php',
        'Tuleap\\PullRequest\\Notification\\FilterUserFromCollection' => __DIR__ . '/../..' . '/include/PullRequest/Notification/FilterUserFromCollection.php',
        'Tuleap\\PullRequest\\Notification\\InvalidWorkerEventPayloadException' => __DIR__ . '/../..' . '/include/PullRequest/Notification/InvalidWorkerEventPayloadException.php',
        'Tuleap\\PullRequest\\Notification\\NoWorkerAvailableToProcessTheQueueException' => __DIR__ . '/../..' . '/include/PullRequest/Notification/NoWorkerAvailableToProcessTheQueueException.php',
        'Tuleap\\PullRequest\\Notification\\NotificationEnhancedContent' => __DIR__ . '/../..' . '/include/PullRequest/Notification/NotificationEnhancedContent.php',
        'Tuleap\\PullRequest\\Notification\\NotificationTemplatedContent' => __DIR__ . '/../..' . '/include/PullRequest/Notification/NotificationTemplatedContent.php',
        'Tuleap\\PullRequest\\Notification\\NotificationToProcess' => __DIR__ . '/../..' . '/include/PullRequest/Notification/NotificationToProcess.php',
        'Tuleap\\PullRequest\\Notification\\NotificationToProcessBuilder' => __DIR__ . '/../..' . '/include/PullRequest/Notification/NotificationToProcessBuilder.php',
        'Tuleap\\PullRequest\\Notification\\OwnerRetriever' => __DIR__ . '/../..' . '/include/PullRequest/Notification/OwnerRetriever.php',
        'Tuleap\\PullRequest\\Notification\\PullRequestNotificationSupport' => __DIR__ . '/../..' . '/include/PullRequest/Notification/PullRequestNotificationSupport.php',
        'Tuleap\\PullRequest\\Notification\\Strategy\\PullRequestNotificationSendMail' => __DIR__ . '/../..' . '/include/PullRequest/Notification/Strategy/PullRequestNotificationSendMail.php',
        'Tuleap\\PullRequest\\Notification\\Strategy\\PullRequestNotificationStrategy' => __DIR__ . '/../..' . '/include/PullRequest/Notification/Strategy/PullRequestNotificationStrategy.php',
        'Tuleap\\PullRequest\\PluginDescriptor' => __DIR__ . '/../..' . '/include/PullRequestPluginDescriptor.class.php',
        'Tuleap\\PullRequest\\PluginInfo' => __DIR__ . '/../..' . '/include/PullRequestPluginInfo.class.php',
        'Tuleap\\PullRequest\\PullRequest' => __DIR__ . '/../..' . '/include/PullRequest/PullRequest.php',
        'Tuleap\\PullRequest\\PullRequestCloser' => __DIR__ . '/../..' . '/include/PullRequest/PullRequestCloser.php',
        'Tuleap\\PullRequest\\PullRequestCount' => __DIR__ . '/../..' . '/include/PullRequest/PullRequestCount.php',
        'Tuleap\\PullRequest\\PullRequestCreator' => __DIR__ . '/../..' . '/include/PullRequest/PullRequestCreator.php',
        'Tuleap\\PullRequest\\PullRequestCreatorChecker' => __DIR__ . '/../..' . '/include/PullRequest/PullRequestCreatorChecker.php',
        'Tuleap\\PullRequest\\PullRequestMerger' => __DIR__ . '/../..' . '/include/PullRequest/PullRequestMerger.php',
        'Tuleap\\PullRequest\\PullRequestPresenter' => __DIR__ . '/../..' . '/include/PullRequest/PullRequestPresenter.php',
        'Tuleap\\PullRequest\\PullRequestReopener' => __DIR__ . '/../..' . '/include/PullRequest/PullRequestReopener.php',
        'Tuleap\\PullRequest\\PullRequestUpdater' => __DIR__ . '/../..' . '/include/PullRequest/PullRequestUpdater.php',
        'Tuleap\\PullRequest\\PullRequestWithGitReference' => __DIR__ . '/../..' . '/include/PullRequest/PullRequestWithGitReference.php',
        'Tuleap\\PullRequest\\PullrequestDisplayer' => __DIR__ . '/../..' . '/include/PullrequestDisplayer.php',
        'Tuleap\\PullRequest\\REST\\ResourcesInjector' => __DIR__ . '/../..' . '/include/PullRequest/REST/ResourcesInjector.class.php',
        'Tuleap\\PullRequest\\REST\\v1\\CommentPOSTRepresentation' => __DIR__ . '/../..' . '/include/PullRequest/REST/v1/CommentPOSTRepresentation.php',
        'Tuleap\\PullRequest\\REST\\v1\\CommentRepresentation' => __DIR__ . '/../..' . '/include/PullRequest/REST/v1/CommentRepresentation.php',
        'Tuleap\\PullRequest\\REST\\v1\\Comment\\ParentIdValidatorForComment' => __DIR__ . '/../..' . '/include/PullRequest/REST/v1/Comment/ParentIdValidatorForComment.php',
        'Tuleap\\PullRequest\\REST\\v1\\Comment\\ParentIdValidatorForInlineComment' => __DIR__ . '/../..' . '/include/PullRequest/REST/v1/Comment/ParentIdValidatorForInlineComment.php',
        'Tuleap\\PullRequest\\REST\\v1\\Comment\\ThreadColors' => __DIR__ . '/../..' . '/include/PullRequest/REST/v1/Comment/ThreadColors.php',
        'Tuleap\\PullRequest\\REST\\v1\\Comment\\ThreadCommentColorAssigner' => __DIR__ . '/../..' . '/include/PullRequest/REST/v1/Comment/ThreadCommentColorAssigner.php',
        'Tuleap\\PullRequest\\REST\\v1\\Comment\\ThreadCommentColorRetriever' => __DIR__ . '/../..' . '/include/PullRequest/REST/v1/Comment/ThreadCommentColorRetriever.php',
        'Tuleap\\PullRequest\\REST\\v1\\GitRepositoryReference' => __DIR__ . '/../..' . '/include/PullRequest/REST/v1/GitRepositoryReference.php',
        'Tuleap\\PullRequest\\REST\\v1\\MimeDetector' => __DIR__ . '/../..' . '/include/PullRequest/REST/v1/MimeDetector.php',
        'Tuleap\\PullRequest\\REST\\v1\\PaginatedCommentsRepresentations' => __DIR__ . '/../..' . '/include/PullRequest/REST/v1/PaginatedCommentsRepresentations.php',
        'Tuleap\\PullRequest\\REST\\v1\\PaginatedCommentsRepresentationsBuilder' => __DIR__ . '/../..' . '/include/PullRequest/REST/v1/PaginatedCommentsRepresentationsBuilder.php',
        'Tuleap\\PullRequest\\REST\\v1\\PaginatedTimelineRepresentation' => __DIR__ . '/../..' . '/include/PullRequest/REST/v1/PaginatedTimelineRepresentation.php',
        'Tuleap\\PullRequest\\REST\\v1\\PaginatedTimelineRepresentationBuilder' => __DIR__ . '/../..' . '/include/PullRequest/REST/v1/PaginatedTimelineRepresentationBuilder.php',
        'Tuleap\\PullRequest\\REST\\v1\\PullRequestFileRepresentation' => __DIR__ . '/../..' . '/include/PullRequest/REST/v1/PullRequestFileRepresentation.php',
        'Tuleap\\PullRequest\\REST\\v1\\PullRequestFileRepresentationFactory' => __DIR__ . '/../..' . '/include/PullRequest/REST/v1/PullRequestFileRepresentationFactory.php',
        'Tuleap\\PullRequest\\REST\\v1\\PullRequestFileUniDiffRepresentation' => __DIR__ . '/../..' . '/include/PullRequest/REST/v1/PullRequestFileUniDiffRepresentation.php',
        'Tuleap\\PullRequest\\REST\\v1\\PullRequestGitCommitRepresentationPartialCollection' => __DIR__ . '/../..' . '/include/PullRequest/REST/v1/PullRequestGitCommitRepresentationPartialCollection.php',
        'Tuleap\\PullRequest\\REST\\v1\\PullRequestHEADRepresentation' => __DIR__ . '/../..' . '/include/PullRequest/REST/v1/PullRequestHEADRepresentation.php',
        'Tuleap\\PullRequest\\REST\\v1\\PullRequestInlineCommentPOSTRepresentation' => __DIR__ . '/../..' . '/include/PullRequest/REST/v1/PullRequestInlineCommentPOSTRepresentation.php',
        'Tuleap\\PullRequest\\REST\\v1\\PullRequestInlineCommentRepresentation' => __DIR__ . '/../..' . '/include/PullRequest/REST/v1/PullRequestInlineCommentRepresentation.php',
        'Tuleap\\PullRequest\\REST\\v1\\PullRequestInlineCommentRepresentationBuilder' => __DIR__ . '/../..' . '/include/PullRequest/REST/v1/PullRequestInlineCommentRepresentationBuilder.php',
        'Tuleap\\PullRequest\\REST\\v1\\PullRequestLineUniDiffRepresentation' => __DIR__ . '/../..' . '/include/PullRequest/REST/v1/PullRequestLineUniDiffRepresentation.php',
        'Tuleap\\PullRequest\\REST\\v1\\PullRequestMinimalRepresentation' => __DIR__ . '/../..' . '/include/PullRequest/REST/v1/PullRequestMinimalRepresentation.php',
        'Tuleap\\PullRequest\\REST\\v1\\PullRequestPATCHRepresentation' => __DIR__ . '/../..' . '/include/PullRequest/REST/v1/PullRequestPATCHRepresentation.php',
        'Tuleap\\PullRequest\\REST\\v1\\PullRequestPOSTRepresentation' => __DIR__ . '/../..' . '/include/PullRequest/REST/v1/PullRequestPOSTRepresentation.php',
        'Tuleap\\PullRequest\\REST\\v1\\PullRequestReference' => __DIR__ . '/../..' . '/include/PullRequest/REST/v1/PullRequestReference.php',
        'Tuleap\\PullRequest\\REST\\v1\\PullRequestRepresentation' => __DIR__ . '/../..' . '/include/PullRequest/REST/v1/PullRequestRepresentation.php',
        'Tuleap\\PullRequest\\REST\\v1\\PullRequestRepresentationFactory' => __DIR__ . '/../..' . '/include/PullRequest/REST/v1/PullRequestRepresentationFactory.php',
        'Tuleap\\PullRequest\\REST\\v1\\PullRequestShortStatRepresentation' => __DIR__ . '/../..' . '/include/PullRequest/REST/v1/PullRequestShortStatRepresentation.php',
        'Tuleap\\PullRequest\\REST\\v1\\PullRequestStatusInfoRepresentation' => __DIR__ . '/../..' . '/include/PullRequest/REST/v1/PullRequestStatusInfoRepresentation.php',
        'Tuleap\\PullRequest\\REST\\v1\\PullRequestStatusInfoRepresentationBuilder' => __DIR__ . '/../..' . '/include/PullRequest/REST/v1/PullRequestStatusInfoRepresentationBuilder.php',
        'Tuleap\\PullRequest\\REST\\v1\\PullRequestStatusTypeConverter' => __DIR__ . '/../..' . '/include/PullRequest/REST/v1/PullRequestStatusTypeConverter.php',
        'Tuleap\\PullRequest\\REST\\v1\\PullRequestsCommitRepresentationFactory' => __DIR__ . '/../..' . '/include/PullRequest/REST/v1/PullRequestsCommitRepresentationFactory.php',
        'Tuleap\\PullRequest\\REST\\v1\\PullRequestsResource' => __DIR__ . '/../..' . '/include/PullRequest/REST/v1/PullRequestsResource.php',
        'Tuleap\\PullRequest\\REST\\v1\\QueryToCriterionConverter' => __DIR__ . '/../..' . '/include/PullRequest/REST/v1/QueryToCriterionConverter.php',
        'Tuleap\\PullRequest\\REST\\v1\\RepositoryPullRequestRepresentation' => __DIR__ . '/../..' . '/include/PullRequest/REST/v1/RepositoryPullRequestRepresentation.php',
        'Tuleap\\PullRequest\\REST\\v1\\RepositoryResource' => __DIR__ . '/../..' . '/include/PullRequest/REST/v1/RepositoryResource.php',
        'Tuleap\\PullRequest\\REST\\v1\\Reviewer\\ReviewerChangeTimelineEventRepresentation' => __DIR__ . '/../..' . '/include/PullRequest/REST/v1/Reviewer/ReviewerChangeTimelineEventRepresentation.php',
        'Tuleap\\PullRequest\\REST\\v1\\Reviewer\\ReviewerRepresentationInformationExtractor' => __DIR__ . '/../..' . '/include/PullRequest/REST/v1/Reviewer/ReviewerRepresentationInformationExtractor.php',
        'Tuleap\\PullRequest\\REST\\v1\\Reviewer\\ReviewersPUTRepresentation' => __DIR__ . '/../..' . '/include/PullRequest/REST/v1/Reviewer/ReviewersPUTRepresentation.php',
        'Tuleap\\PullRequest\\REST\\v1\\Reviewer\\ReviewersRepresentation' => __DIR__ . '/../..' . '/include/PullRequest/REST/v1/Reviewer/ReviewersRepresentation.php',
        'Tuleap\\PullRequest\\REST\\v1\\StatusPatcher' => __DIR__ . '/../..' . '/include/PullRequest/REST/v1/StatusPatcher.php',
        'Tuleap\\PullRequest\\REST\\v1\\TimelineEventRepresentation' => __DIR__ . '/../..' . '/include/PullRequest/REST/v1/TimelineEventRepresentation.php',
        'Tuleap\\PullRequest\\REST\\v1\\TimelineInlineCommentRepresentation' => __DIR__ . '/../..' . '/include/PullRequest/REST/v1/TimelineInlineCommentRepresentation.php',
        'Tuleap\\PullRequest\\Reference\\CrossReferencePullRequestOrganizer' => __DIR__ . '/../..' . '/include/PullRequest/Reference/CrossReferencePullRequestOrganizer.php',
        'Tuleap\\PullRequest\\Reference\\HTMLURLBuilder' => __DIR__ . '/../..' . '/include/PullRequest/Reference/HTMLURLBuilder.php',
        'Tuleap\\PullRequest\\Reference\\ProjectReferenceRetriever' => __DIR__ . '/../..' . '/include/PullRequest/Reference/ProjectReferenceRetriever.php',
        'Tuleap\\PullRequest\\Reference\\Reference' => __DIR__ . '/../..' . '/include/PullRequest/Reference/Reference.php',
        'Tuleap\\PullRequest\\Reference\\ReferenceDao' => __DIR__ . '/../..' . '/include/PullRequest/Reference/ReferenceDao.php',
        'Tuleap\\PullRequest\\Reference\\ReferenceFactory' => __DIR__ . '/../..' . '/include/PullRequest/Reference/ReferenceFactory.php',
        'Tuleap\\PullRequest\\RepoManagement\\PullRequestPane' => __DIR__ . '/../..' . '/include/PullRequest/RepoManagement/PullRequestPane.php',
        'Tuleap\\PullRequest\\RepoManagement\\PullRequestPanePresenter' => __DIR__ . '/../..' . '/include/PullRequest/RepoManagement/PullRequestPanePresenter.php',
        'Tuleap\\PullRequest\\RepoManagement\\RepoManagementController' => __DIR__ . '/../..' . '/include/PullRequest/RepoManagement/RepoManagementController.php',
        'Tuleap\\PullRequest\\Reviewer\\Autocompleter\\PotentialReviewerRetriever' => __DIR__ . '/../..' . '/include/PullRequest/Reviewer/Autocompleter/PotentialReviewerRetriever.php',
        'Tuleap\\PullRequest\\Reviewer\\Autocompleter\\ReviewerAutocompleterController' => __DIR__ . '/../..' . '/include/PullRequest/Reviewer/Autocompleter/ReviewerAutocompleterController.php',
        'Tuleap\\PullRequest\\Reviewer\\Autocompleter\\UsernameToSearch' => __DIR__ . '/../..' . '/include/PullRequest/Reviewer/Autocompleter/UsernameToSearch.php',
        'Tuleap\\PullRequest\\Reviewer\\Autocompleter\\UsernameToSearchTooSmallException' => __DIR__ . '/../..' . '/include/PullRequest/Reviewer/Autocompleter/UsernameToSearchTooSmallException.php',
        'Tuleap\\PullRequest\\Reviewer\\Change\\ReviewerChange' => __DIR__ . '/../..' . '/include/PullRequest/Reviewer/Change/ReviewerChange.php',
        'Tuleap\\PullRequest\\Reviewer\\Change\\ReviewerChangeDAO' => __DIR__ . '/../..' . '/include/PullRequest/Reviewer/Change/ReviewerChangeDAO.php',
        'Tuleap\\PullRequest\\Reviewer\\Change\\ReviewerChangeEvent' => __DIR__ . '/../..' . '/include/PullRequest/Reviewer/Change/ReviewerChangeEvent.php',
        'Tuleap\\PullRequest\\Reviewer\\Change\\ReviewerChangePullRequestAssociation' => __DIR__ . '/../..' . '/include/PullRequest/Reviewer/Change/ReviewerChangePullRequestAssociation.php',
        'Tuleap\\PullRequest\\Reviewer\\Change\\ReviewerChangeRetriever' => __DIR__ . '/../..' . '/include/PullRequest/Reviewer/Change/ReviewerChangeRetriever.php',
        'Tuleap\\PullRequest\\Reviewer\\Notification\\ReviewerAddedNotification' => __DIR__ . '/../..' . '/include/PullRequest/Reviewer/Notification/ReviewerAddedNotification.php',
        'Tuleap\\PullRequest\\Reviewer\\Notification\\ReviewerAddedNotificationContentPresenter' => __DIR__ . '/../..' . '/include/PullRequest/Reviewer/Notification/ReviewerAddedNotificationContentPresenter.php',
        'Tuleap\\PullRequest\\Reviewer\\Notification\\ReviewerChangeNotificationToProcessBuilder' => __DIR__ . '/../..' . '/include/PullRequest/Reviewer/Notification/ReviewerChangeNotificationToProcessBuilder.php',
        'Tuleap\\PullRequest\\Reviewer\\ReviewerDAO' => __DIR__ . '/../..' . '/include/PullRequest/Reviewer/ReviewerDAO.php',
        'Tuleap\\PullRequest\\Reviewer\\ReviewerRetriever' => __DIR__ . '/../..' . '/include/PullRequest/Reviewer/ReviewerRetriever.php',
        'Tuleap\\PullRequest\\Reviewer\\ReviewerUpdater' => __DIR__ . '/../..' . '/include/PullRequest/Reviewer/ReviewerUpdater.php',
        'Tuleap\\PullRequest\\Reviewer\\ReviewersCannotBeUpdatedOnClosedPullRequestException' => __DIR__ . '/../..' . '/include/PullRequest/Reviewer/ReviewersCannotBeUpdatedOnClosedPullRequestException.php',
        'Tuleap\\PullRequest\\Reviewer\\UserCannotBeAddedAsReviewerException' => __DIR__ . '/../..' . '/include/PullRequest/Reviewer/UserCannotBeAddedAsReviewerException.php',
        'Tuleap\\PullRequest\\ShortStat' => __DIR__ . '/../..' . '/include/PullRequest/ShortStat.php',
        'Tuleap\\PullRequest\\StateStatus\\PullRequestAbandonedContentPresenter' => __DIR__ . '/../..' . '/include/PullRequest/StateStatus/PullRequestAbandonedContentPresenter.php',
        'Tuleap\\PullRequest\\StateStatus\\PullRequestAbandonedEvent' => __DIR__ . '/../..' . '/include/PullRequest/StateStatus/PullRequestAbandonedEvent.php',
        'Tuleap\\PullRequest\\StateStatus\\PullRequestAbandonedNotification' => __DIR__ . '/../..' . '/include/PullRequest/StateStatus/PullRequestAbandonedNotification.php',
        'Tuleap\\PullRequest\\StateStatus\\PullRequestAbandonedNotificationToProcessBuilder' => __DIR__ . '/../..' . '/include/PullRequest/StateStatus/PullRequestAbandonedNotificationToProcessBuilder.php',
        'Tuleap\\PullRequest\\StateStatus\\PullRequestMergedContentPresenter' => __DIR__ . '/../..' . '/include/PullRequest/StateStatus/PullRequestMergedContentPresenter.php',
        'Tuleap\\PullRequest\\StateStatus\\PullRequestMergedEvent' => __DIR__ . '/../..' . '/include/PullRequest/StateStatus/PullRequestMergedEvent.php',
        'Tuleap\\PullRequest\\StateStatus\\PullRequestMergedNotification' => __DIR__ . '/../..' . '/include/PullRequest/StateStatus/PullRequestMergedNotification.php',
        'Tuleap\\PullRequest\\StateStatus\\PullRequestMergedNotificationToProcessBuilder' => __DIR__ . '/../..' . '/include/PullRequest/StateStatus/PullRequestMergedNotificationToProcessBuilder.php',
        'Tuleap\\PullRequest\\Timeline\\Dao' => __DIR__ . '/../..' . '/include/PullRequest/Timeline/Dao.php',
        'Tuleap\\PullRequest\\Timeline\\Factory' => __DIR__ . '/../..' . '/include/PullRequest/Timeline/Factory.php',
        'Tuleap\\PullRequest\\Timeline\\PaginatedTimeline' => __DIR__ . '/../..' . '/include/PullRequest/Timeline/PaginatedTimeline.php',
        'Tuleap\\PullRequest\\Timeline\\SearchAbandonEvent' => __DIR__ . '/../..' . '/include/PullRequest/Timeline/SearchAbandonEvent.php',
        'Tuleap\\PullRequest\\Timeline\\SearchMergeEvent' => __DIR__ . '/../..' . '/include/PullRequest/Timeline/SearchMergeEvent.php',
        'Tuleap\\PullRequest\\Timeline\\TimelineEvent' => __DIR__ . '/../..' . '/include/PullRequest/Timeline/TimelineEvent.php',
        'Tuleap\\PullRequest\\Timeline\\TimelineEventCreator' => __DIR__ . '/../..' . '/include/PullRequest/Timeline/TimelineEventCreator.php',
        'Tuleap\\PullRequest\\Timeline\\TimelineGlobalEvent' => __DIR__ . '/../..' . '/include/PullRequest/Timeline/TimelineGlobalEvent.php',
        'Tuleap\\PullRequest\\Tooltip\\Presenter' => __DIR__ . '/../..' . '/include/PullRequest/Tooltip/Presenter.php',
        'Tuleap\\PullRequest\\UniDiffLine' => __DIR__ . '/../..' . '/include/PullRequest/UniDiffLine.php',
        'pullrequestPlugin' => __DIR__ . '/../..' . '/include/pullrequestPlugin.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc03ef7277b6d83037bb5ac34c4aadd69::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc03ef7277b6d83037bb5ac34c4aadd69::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc03ef7277b6d83037bb5ac34c4aadd69::$classMap;

        }, null, ClassLoader::class);
    }
}
