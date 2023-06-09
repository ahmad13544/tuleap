<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(__DIR__);
$baseDir = dirname($vendorDir);

return array(
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'SvnPlugin' => $baseDir . '/include/svnPlugin.php',
    'SvnPluginDescriptor' => $baseDir . '/include/SvnPluginDescriptor.class.php',
    'SvnPluginInfo' => $baseDir . '/include/SvnPluginInfo.class.php',
    'Tuleap\\SVN\\AccessControl\\AccessControlController' => $baseDir . '/include/SVN/AccessControl/AccessControlController.php',
    'Tuleap\\SVN\\AccessControl\\AccessControlPresenter' => $baseDir . '/include/SVN/AccessControl/AccessControlPresenter.php',
    'Tuleap\\SVN\\AccessControl\\AccessFileHistory' => $baseDir . '/include/SVN/AccessControl/AccessFileHistory.php',
    'Tuleap\\SVN\\AccessControl\\AccessFileHistoryCreator' => $baseDir . '/include/SVN/AccessControl/AccessFileHistoryCreator.php',
    'Tuleap\\SVN\\AccessControl\\AccessFileHistoryDao' => $baseDir . '/include/SVN/AccessControl/AccessFileHistoryDao.php',
    'Tuleap\\SVN\\AccessControl\\AccessFileHistoryFactory' => $baseDir . '/include/SVN/AccessControl/AccessFileHistoryFactory.php',
    'Tuleap\\SVN\\AccessControl\\AccessFileHistoryNotFoundException' => $baseDir . '/include/SVN/AccessControl/AccessFileHistoryNotFoundException.php',
    'Tuleap\\SVN\\AccessControl\\AccessFileReader' => $baseDir . '/include/SVN/AccessControl/AccessFileReader.php',
    'Tuleap\\SVN\\AccessControl\\CannotCreateAccessFileHistoryException' => $baseDir . '/include/SVN/AccessControl/CannotCreateAccessFileHistoryException.php',
    'Tuleap\\SVN\\AccessControl\\NullAccessFileHistory' => $baseDir . '/include/SVN/AccessControl/NullAccessFileHistory.php',
    'Tuleap\\SVN\\AccessControl\\SVNRefreshAllAccessFilesCommand' => $baseDir . '/include/SVN/AccessControl/SVNRefreshAllAccessFilesCommand.php',
    'Tuleap\\SVN\\Admin\\AdminController' => $baseDir . '/include/SVN/Admin/AdminController.php',
    'Tuleap\\SVN\\Admin\\AdminGroupsPresenter' => $baseDir . '/include/SVN/Admin/AdminGroupsPresenter.php',
    'Tuleap\\SVN\\Admin\\BaseAdminPresenter' => $baseDir . '/include/SVN/Admin/BaseAdminPresenter.php',
    'Tuleap\\SVN\\Admin\\BaseGlobalAdminPresenter' => $baseDir . '/include/SVN/Admin/BaseGlobalAdminPresenter.php',
    'Tuleap\\SVN\\Admin\\CannotCreateImmuableTagException' => $baseDir . '/include/SVN/Admin/CannotCreateImmuableTagException.php',
    'Tuleap\\SVN\\Admin\\CannotCreateMailHeaderException' => $baseDir . '/include/SVN/Admin/CannotCreateMailHeaderException.php',
    'Tuleap\\SVN\\Admin\\CannotDeleteMailNotificationException' => $baseDir . '/include/SVN/Admin/CannotDeleteMailNotificationException.php',
    'Tuleap\\SVN\\Admin\\DisplayMigrateFromCoreController' => $baseDir . '/include/SVN/Admin/DisplayMigrateFromCoreController.php',
    'Tuleap\\SVN\\Admin\\GlobalAdministratorsController' => $baseDir . '/include/SVN/Admin/GlobalAdministratorsController.php',
    'Tuleap\\SVN\\Admin\\GlobalAdministratorsUpdater' => $baseDir . '/include/SVN/Admin/GlobalAdministratorsUpdater.php',
    'Tuleap\\SVN\\Admin\\HooksConfigurationPresenter' => $baseDir . '/include/SVN/Admin/HooksConfigurationPresenter.php',
    'Tuleap\\SVN\\Admin\\ImmutableTag' => $baseDir . '/include/SVN/Admin/ImmutableTag.php',
    'Tuleap\\SVN\\Admin\\ImmutableTagController' => $baseDir . '/include/SVN/Admin/ImmutableTagController.php',
    'Tuleap\\SVN\\Admin\\ImmutableTagCreator' => $baseDir . '/include/SVN/Admin/ImmutableTagCreator.php',
    'Tuleap\\SVN\\Admin\\ImmutableTagDao' => $baseDir . '/include/SVN/Admin/ImmutableTagDao.php',
    'Tuleap\\SVN\\Admin\\ImmutableTagFactory' => $baseDir . '/include/SVN/Admin/ImmutableTagFactory.php',
    'Tuleap\\SVN\\Admin\\ImmutableTagListTooBigException' => $baseDir . '/include/SVN/Admin/ImmutableTagListTooBigException.php',
    'Tuleap\\SVN\\Admin\\ImmutableTagPresenter' => $baseDir . '/include/SVN/Admin/ImmutableTagPresenter.php',
    'Tuleap\\SVN\\Admin\\MailHeader' => $baseDir . '/include/SVN/Admin/MailHeader.php',
    'Tuleap\\SVN\\Admin\\MailHeaderDao' => $baseDir . '/include/SVN/Admin/MailHeaderDao.php',
    'Tuleap\\SVN\\Admin\\MailHeaderManager' => $baseDir . '/include/SVN/Admin/MailHeaderManager.php',
    'Tuleap\\SVN\\Admin\\MailNotification' => $baseDir . '/include/SVN/Admin/MailNotification.php',
    'Tuleap\\SVN\\Admin\\MailNotificationDao' => $baseDir . '/include/SVN/Admin/MailNotificationDao.php',
    'Tuleap\\SVN\\Admin\\MailNotificationManager' => $baseDir . '/include/SVN/Admin/MailNotificationManager.php',
    'Tuleap\\SVN\\Admin\\MailNotificationPresenter' => $baseDir . '/include/SVN/Admin/MailNotificationPresenter.php',
    'Tuleap\\SVN\\Admin\\MailReceivedFromUserExtractor' => $baseDir . '/include/SVN/Admin/MailReceivedFromUserExtractor.php',
    'Tuleap\\SVN\\Admin\\MailReference' => $baseDir . '/include/SVN/Admin/MailReference.php',
    'Tuleap\\SVN\\Admin\\MigrateFromCorePresenter' => $baseDir . '/include/SVN/Admin/MigrateFromCorePresenter.php',
    'Tuleap\\SVN\\Admin\\RepositoryDeletePresenter' => $baseDir . '/include/SVN/Admin/RepositoryDeletePresenter.php',
    'Tuleap\\SVN\\Admin\\RestoreController' => $baseDir . '/include/SVN/Admin/RestoreController.php',
    'Tuleap\\SVN\\Admin\\RestorePresenter' => $baseDir . '/include/SVN/Admin/RestorePresenter.php',
    'Tuleap\\SVN\\Admin\\SectionsPresenter' => $baseDir . '/include/SVN/Admin/SectionsPresenter.php',
    'Tuleap\\SVN\\Admin\\UpdateMigrateFromCoreController' => $baseDir . '/include/SVN/Admin/UpdateMigrateFromCoreController.php',
    'Tuleap\\SVN\\Commit\\CannotFindSVNCommitInfoException' => $baseDir . '/include/SVN/Commit/CannotFindSVNCommitInfoException.php',
    'Tuleap\\SVN\\Commit\\CollidingSHA1Validator' => $baseDir . '/include/SVN/Commit/CollidingSHA1Validator.php',
    'Tuleap\\SVN\\Commit\\CommitInfo' => $baseDir . '/include/SVN/Commit/CommitInfo.php',
    'Tuleap\\SVN\\Commit\\CommitInfoEnhancer' => $baseDir . '/include/SVN/Commit/CommitInfoEnhancer.php',
    'Tuleap\\SVN\\Commit\\CommitMessageValidator' => $baseDir . '/include/SVN/Commit/CommitMessageValidator.php',
    'Tuleap\\SVN\\Commit\\CommitMessageWithoutReferenceException' => $baseDir . '/include/SVN/Commit/CommitMessageWithoutReferenceException.php',
    'Tuleap\\SVN\\Commit\\CommittedFileTooLargeException' => $baseDir . '/include/SVN/Commit/CommittedFileTooLargeException.php',
    'Tuleap\\SVN\\Commit\\EmptyCommitMessageException' => $baseDir . '/include/SVN/Commit/EmptyCommitMessageException.php',
    'Tuleap\\SVN\\Commit\\FileSizeValidator' => $baseDir . '/include/SVN/Commit/FileSizeValidator.php',
    'Tuleap\\SVN\\Commit\\ImmutableTagCommitValidator' => $baseDir . '/include/SVN/Commit/ImmutableTagCommitValidator.php',
    'Tuleap\\SVN\\Commit\\PathValidator' => $baseDir . '/include/SVN/Commit/PathValidator.php',
    'Tuleap\\SVN\\Commit\\Svnlook' => $baseDir . '/include/SVN/Commit/Svnlook.php',
    'Tuleap\\SVN\\Dao' => $baseDir . '/include/SVN/Dao.php',
    'Tuleap\\SVN\\DiskUsage\\DiskUsageCollector' => $baseDir . '/include/SVN/DiskUsage/DiskUsageCollector.php',
    'Tuleap\\SVN\\DiskUsage\\DiskUsageDao' => $baseDir . '/include/SVN/DiskUsage/DiskUsageDao.php',
    'Tuleap\\SVN\\DiskUsage\\DiskUsageRetriever' => $baseDir . '/include/SVN/DiskUsage/DiskUsageRetriever.php',
    'Tuleap\\SVN\\Events\\SystemEvent_SVN_CREATE_REPOSITORY' => $baseDir . '/include/Events/SystemEvent_SVN_CREATE_REPOSITORY.class.php',
    'Tuleap\\SVN\\Events\\SystemEvent_SVN_DELETE_REPOSITORY' => $baseDir . '/include/Events/SystemEvent_SVN_DELETE_REPOSITORY.class.php',
    'Tuleap\\SVN\\Events\\SystemEvent_SVN_IMPORT_CORE_REPOSITORY' => $baseDir . '/include/Events/SystemEvent_SVN_IMPORT_CORE_REPOSITORY.php',
    'Tuleap\\SVN\\Events\\SystemEvent_SVN_RESTORE_REPOSITORY' => $baseDir . '/include/Events/SystemEvent_SVN_RESTORE_REPOSITORY.php',
    'Tuleap\\SVN\\Explorer\\ExplorerController' => $baseDir . '/include/SVN/Explorer/ExplorerController.php',
    'Tuleap\\SVN\\Explorer\\ExplorerPresenter' => $baseDir . '/include/SVN/Explorer/ExplorerPresenter.php',
    'Tuleap\\SVN\\Explorer\\RepositoryBuilder' => $baseDir . '/include/SVN/Explorer/RepositoryBuilder.php',
    'Tuleap\\SVN\\Explorer\\RepositoryDisplayController' => $baseDir . '/include/SVN/Explorer/RepositoryDisplayController.php',
    'Tuleap\\SVN\\Explorer\\RepositoryDisplayPresenter' => $baseDir . '/include/SVN/Explorer/RepositoryDisplayPresenter.php',
    'Tuleap\\SVN\\Explorer\\RepositoryPresenter' => $baseDir . '/include/SVN/Explorer/RepositoryPresenter.php',
    'Tuleap\\SVN\\Hooks\\MissingHooksPathsFromFileSystemRetriever' => $baseDir . '/include/SVN/Hooks/MissingHooksPathsFromFileSystemRetriever.php',
    'Tuleap\\SVN\\Hooks\\MissingHooksPathsRetriever' => $baseDir . '/include/SVN/Hooks/MissingHooksPathsRetriever.php',
    'Tuleap\\SVN\\Hooks\\PostCommit' => $baseDir . '/include/SVN/Hooks/PostCommit.php',
    'Tuleap\\SVN\\Hooks\\PreCommit' => $baseDir . '/include/SVN/Hooks/PreCommit.php',
    'Tuleap\\SVN\\Hooks\\PreRevpropChange' => $baseDir . '/include/SVN/Hooks/PreRevpropChange.php',
    'Tuleap\\SVN\\Hooks\\RestoreMissingHooks' => $baseDir . '/include/SVN/Hooks/RestoreMissingHooks.php',
    'Tuleap\\SVN\\Logs\\CannotGetCommitDateException' => $baseDir . '/include/SVN/Logs/CannotGetCommitDateException.php',
    'Tuleap\\SVN\\Logs\\DBWriter' => $baseDir . '/include/SVN/Logs/DBWriter.php',
    'Tuleap\\SVN\\Logs\\DBWriterCore' => $baseDir . '/include/SVN/Logs/DBWriterCore.php',
    'Tuleap\\SVN\\Logs\\DBWriterCoreDao' => $baseDir . '/include/SVN/Logs/DBWriterCoreDao.php',
    'Tuleap\\SVN\\Logs\\DBWriterPlugin' => $baseDir . '/include/SVN/Logs/DBWriterPlugin.php',
    'Tuleap\\SVN\\Logs\\DBWriterPluginDao' => $baseDir . '/include/SVN/Logs/DBWriterPluginDao.php',
    'Tuleap\\SVN\\Logs\\DBWriterUserCache' => $baseDir . '/include/SVN/Logs/DBWriterUserCache.php',
    'Tuleap\\SVN\\Logs\\LastAccessDao' => $baseDir . '/include/SVN/Logs/LastAccessDao.php',
    'Tuleap\\SVN\\Logs\\LastAccessUpdater' => $baseDir . '/include/SVN/Logs/LastAccessUpdater.php',
    'Tuleap\\SVN\\Logs\\LogCache' => $baseDir . '/include/SVN/Logs/LogCache.php',
    'Tuleap\\SVN\\Logs\\Parser' => $baseDir . '/include/SVN/Logs/Parser.php',
    'Tuleap\\SVN\\Logs\\QueryBuilder' => $baseDir . '/include/SVN/Logs/QueryBuilder.php',
    'Tuleap\\SVN\\Migration\\BareRepositoryCreator' => $baseDir . '/include/SVN/Migration/BareRepositoryCreator.php',
    'Tuleap\\SVN\\Migration\\RepositoryCopier' => $baseDir . '/include/SVN/Migration/RepositoryCopier.php',
    'Tuleap\\SVN\\Migration\\SettingsRetriever' => $baseDir . '/include/SVN/Migration/SettingsRetriever.php',
    'Tuleap\\SVN\\Migration\\SvnMigratorException' => $baseDir . '/include/SVN/Migration/SvnMigratorException.php',
    'Tuleap\\SVN\\Notifications\\CannotAddUgroupsNotificationException' => $baseDir . '/include/SVN/Notifications/CannotAddUgroupsNotificationException.php',
    'Tuleap\\SVN\\Notifications\\CannotAddUsersNotificationException' => $baseDir . '/include/SVN/Notifications/CannotAddUsersNotificationException.php',
    'Tuleap\\SVN\\Notifications\\CollectionOfUgroupToBeNotifiedPresenterBuilder' => $baseDir . '/include/SVN/Notifications/CollectionOfUgroupToBeNotifiedPresenterBuilder.php',
    'Tuleap\\SVN\\Notifications\\CollectionOfUserToBeNotifiedPresenterBuilder' => $baseDir . '/include/SVN/Notifications/CollectionOfUserToBeNotifiedPresenterBuilder.php',
    'Tuleap\\SVN\\Notifications\\EmailsToBeNotifiedRetriever' => $baseDir . '/include/SVN/Notifications/EmailsToBeNotifiedRetriever.php',
    'Tuleap\\SVN\\Notifications\\NotificationListBuilder' => $baseDir . '/include/SVN/Notifications/NotificationListBuilder.php',
    'Tuleap\\SVN\\Notifications\\NotificationPresenter' => $baseDir . '/include/SVN/Notifications/NotificationPresenter.php',
    'Tuleap\\SVN\\Notifications\\NotificationsEmailsBuilder' => $baseDir . '/include/SVN/Notifications/NotificationsEmailsBuilder.php',
    'Tuleap\\SVN\\Notifications\\NotificationsForProjectMemberCleaner' => $baseDir . '/include/SVN/Notifications/NotificationsForProjectMemberCleaner.php',
    'Tuleap\\SVN\\Notifications\\UgroupsToNotifyDao' => $baseDir . '/include/SVN/Notifications/UgroupsToNotifyDao.php',
    'Tuleap\\SVN\\Notifications\\UgroupsToNotifyUpdater' => $baseDir . '/include/SVN/Notifications/UgroupsToNotifyUpdater.php',
    'Tuleap\\SVN\\Notifications\\UsersToNotifyDao' => $baseDir . '/include/SVN/Notifications/UsersToNotifyDao.php',
    'Tuleap\\SVN\\PermissionsPerGroup\\PaneCollector' => $baseDir . '/include/SVN/PermissionsPerGroup/PaneCollector.php',
    'Tuleap\\SVN\\PermissionsPerGroup\\PermissionPerGroupRepositoriesRepresentation' => $baseDir . '/include/SVN/PermissionsPerGroup/PermissionPerGroupRepositoriesRepresentation.php',
    'Tuleap\\SVN\\PermissionsPerGroup\\PermissionPerGroupRepositoryRepresentation' => $baseDir . '/include/SVN/PermissionsPerGroup/PermissionPerGroupRepositoryRepresentation.php',
    'Tuleap\\SVN\\PermissionsPerGroup\\PermissionPerGroupRepositoryRepresentationBuilder' => $baseDir . '/include/SVN/PermissionsPerGroup/PermissionPerGroupRepositoryRepresentationBuilder.php',
    'Tuleap\\SVN\\PermissionsPerGroup\\PermissionPerGroupSVNGlobalAdminPermissionCollection' => $baseDir . '/include/SVN/PermissionsPerGroup/PermissionPerGroupSVNGlobalAdminPermissionCollection.php',
    'Tuleap\\SVN\\PermissionsPerGroup\\PermissionPerGroupSVNServicePaneBuilder' => $baseDir . '/include/SVN/PermissionsPerGroup/PermissionPerGroupSVNServicePaneBuilder.php',
    'Tuleap\\SVN\\PermissionsPerGroup\\PermissionPerGroupServicePresenter' => $baseDir . '/include/SVN/PermissionsPerGroup/PermissionPerGroupServicePresenter.php',
    'Tuleap\\SVN\\PermissionsPerGroup\\SVNJSONPermissionsRetriever' => $baseDir . '/include/SVN/PermissionsPerGroup/SVNJSONPermissionsRetriever.php',
    'Tuleap\\SVN\\REST\\ResourcesInjector' => $baseDir . '/include/REST/ResourcesInjector.php',
    'Tuleap\\SVN\\REST\\v1\\CommitRulesRepresentation' => $baseDir . '/include/REST/v1/CommitRulesRepresentation.php',
    'Tuleap\\SVN\\REST\\v1\\FullRepositoryRepresentation' => $baseDir . '/include/REST/v1/FullRepositoryRepresentation.php',
    'Tuleap\\SVN\\REST\\v1\\ImmutableTagRepresentation' => $baseDir . '/include/REST/v1/ImmutableTagRepresentation.php',
    'Tuleap\\SVN\\REST\\v1\\NotificationPOSTPUTRepresentation' => $baseDir . '/include/REST/v1/NotificationPOSTPUTRepresentation.php',
    'Tuleap\\SVN\\REST\\v1\\NotificationRepresentation' => $baseDir . '/include/REST/v1/NotificationRepresentation.php',
    'Tuleap\\SVN\\REST\\v1\\NotificationUpdateChecker' => $baseDir . '/include/REST/v1/NotificationUpdateChecker.php',
    'Tuleap\\SVN\\REST\\v1\\NotificationsBuilder' => $baseDir . '/include/REST/v1/NotificationsBuilder.php',
    'Tuleap\\SVN\\REST\\v1\\ProjectResource' => $baseDir . '/include/REST/v1/ProjectResource.php',
    'Tuleap\\SVN\\REST\\v1\\RepositoryRepresentation' => $baseDir . '/include/REST/v1/RepositoryRepresentation.php',
    'Tuleap\\SVN\\REST\\v1\\RepositoryRepresentationBuilder' => $baseDir . '/include/REST/v1/RepositoryRepresentationBuilder.php',
    'Tuleap\\SVN\\REST\\v1\\RepositoryRepresentationPaginatedCollection' => $baseDir . '/include/REST/v1/RepositoryRepresentationPaginatedCollection.php',
    'Tuleap\\SVN\\REST\\v1\\RepositoryResource' => $baseDir . '/include/REST/v1/RepositoryResource.php',
    'Tuleap\\SVN\\REST\\v1\\RepositoryResourceUpdater' => $baseDir . '/include/REST/v1/RepositoryResourceUpdater.php',
    'Tuleap\\SVN\\REST\\v1\\SettingsInvalidException' => $baseDir . '/include/REST/v1/SettingsInvalidException.php',
    'Tuleap\\SVN\\REST\\v1\\SettingsPOSTRepresentation' => $baseDir . '/include/REST/v1/SettingsPOSTRepresentation.php',
    'Tuleap\\SVN\\REST\\v1\\SettingsPUTRepresentation' => $baseDir . '/include/REST/v1/SettingsPUTRepresentation.php',
    'Tuleap\\SVN\\REST\\v1\\SettingsRepresentation' => $baseDir . '/include/REST/v1/SettingsRepresentation.php',
    'Tuleap\\SVN\\REST\\v1\\SettingsRepresentationInterface' => $baseDir . '/include/REST/v1/SettingsRepresentationInterface.php',
    'Tuleap\\SVN\\REST\\v1\\SettingsRepresentationValidator' => $baseDir . '/include/REST/v1/SettingsRepresentationValidator.php',
    'Tuleap\\SVN\\RedirectOldViewVCUrls' => $baseDir . '/include/SVN/RedirectOldViewVCUrls.php',
    'Tuleap\\SVN\\Reference\\Extractor' => $baseDir . '/include/Reference/Extractor.php',
    'Tuleap\\SVN\\Reference\\Reference' => $baseDir . '/include/Reference/Reference.php',
    'Tuleap\\SVN\\Repository\\ApacheConfRepository' => $baseDir . '/include/SVN/Repository/ApacheConfRepository.php',
    'Tuleap\\SVN\\Repository\\ApacheRepositoriesCollector' => $baseDir . '/include/SVN/Repository/ApacheRepositoriesCollector.php',
    'Tuleap\\SVN\\Repository\\CoreRepository' => $baseDir . '/include/SVN/Repository/CoreRepository.php',
    'Tuleap\\SVN\\Repository\\Destructor' => $baseDir . '/include/SVN/Repository/Destructor.php',
    'Tuleap\\SVN\\Repository\\Exception\\CannotCreateRepositoryException' => $baseDir . '/include/SVN/Repository/Exception/CannotCreateRepositoryException.php',
    'Tuleap\\SVN\\Repository\\Exception\\CannotDeleteRepositoryException' => $baseDir . '/include/SVN/Repository/Exception/CannotDeleteRepositoryException.php',
    'Tuleap\\SVN\\Repository\\Exception\\CannotFindRepositoryException' => $baseDir . '/include/SVN/Repository/Exception/CannotFindRepositoryException.php',
    'Tuleap\\SVN\\Repository\\Exception\\RepositoryNameIsInvalidException' => $baseDir . '/include/SVN/Repository/Exception/RepositoryNameIsInvalidException.php',
    'Tuleap\\SVN\\Repository\\Exception\\UserIsNotSVNAdministratorException' => $baseDir . '/include/SVN/Repository/Exception/UserIsNotSVNAdministratorException.php',
    'Tuleap\\SVN\\Repository\\HookConfig' => $baseDir . '/include/SVN/Repository/HookConfig.class.php',
    'Tuleap\\SVN\\Repository\\HookConfigChecker' => $baseDir . '/include/SVN/Repository/HookConfigChecker.php',
    'Tuleap\\SVN\\Repository\\HookConfigRetriever' => $baseDir . '/include/SVN/Repository/HookConfigRetriever.php',
    'Tuleap\\SVN\\Repository\\HookConfigSanitizer' => $baseDir . '/include/SVN/Repository/HookConfigSanitizer.php',
    'Tuleap\\SVN\\Repository\\HookConfigUpdator' => $baseDir . '/include/SVN/Repository/HookConfigUpdator.php',
    'Tuleap\\SVN\\Repository\\HookDao' => $baseDir . '/include/SVN/Repository/HookDao.php',
    'Tuleap\\SVN\\Repository\\ProjectHistoryFormatter' => $baseDir . '/include/SVN/Repository/ProjectHistoryFormatter.php',
    'Tuleap\\SVN\\Repository\\Repository' => $baseDir . '/include/SVN/Repository/Repository.php',
    'Tuleap\\SVN\\Repository\\RepositoryByProjectCollection' => $baseDir . '/include/SVN/Repository/RepositoryByProjectCollection.php',
    'Tuleap\\SVN\\Repository\\RepositoryCreator' => $baseDir . '/include/SVN/Repository/RepositoryCreator.php',
    'Tuleap\\SVN\\Repository\\RepositoryDeleter' => $baseDir . '/include/SVN/Repository/RepositoryDeleter.php',
    'Tuleap\\SVN\\Repository\\RepositoryManager' => $baseDir . '/include/SVN/Repository/RepositoryManager.php',
    'Tuleap\\SVN\\Repository\\RepositoryPaginatedCollection' => $baseDir . '/include/SVN/Repository/RepositoryPaginatedCollection.php',
    'Tuleap\\SVN\\Repository\\RepositoryRegexpBuilder' => $baseDir . '/include/SVN/Repository/RepositoryRegexpBuilder.php',
    'Tuleap\\SVN\\Repository\\RepositoryWithLastCommitDate' => $baseDir . '/include/SVN/Repository/RepositoryWithLastCommitDate.php',
    'Tuleap\\SVN\\Repository\\RestorableRepositoryPresenter' => $baseDir . '/include/SVN/Repository/RestorableRepositoryPresenter.php',
    'Tuleap\\SVN\\Repository\\RuleName' => $baseDir . '/include/SVN/Repository/RuleName.php',
    'Tuleap\\SVN\\Repository\\Settings' => $baseDir . '/include/SVN/Repository/Settings.php',
    'Tuleap\\SVN\\Repository\\SvnCoreAccess' => $baseDir . '/include/SVN/Repository/SvnCoreAccess.php',
    'Tuleap\\SVN\\Repository\\SvnRepository' => $baseDir . '/include/SVN/Repository/SvnRepository.php',
    'Tuleap\\SVN\\ServiceSvn' => $baseDir . '/include/SVN/ServiceSvn.php',
    'Tuleap\\SVN\\Service\\ServiceActivator' => $baseDir . '/include/SVN/Service/ServiceActivator.php',
    'Tuleap\\SVN\\Setup\\SetupSVNCommand' => $baseDir . '/include/Setup/SetupSVNCommand.php',
    'Tuleap\\SVN\\SiteAdmin\\AdminPresenter' => $baseDir . '/include/SVN/SiteAdmin/AdminPresenter.php',
    'Tuleap\\SVN\\SiteAdmin\\CachePresenter' => $baseDir . '/include/SVN/SiteAdmin/CachePresenter.php',
    'Tuleap\\SVN\\SiteAdmin\\DisplayMaxFileSizeController' => $baseDir . '/include/SVN/SiteAdmin/DisplayMaxFileSizeController.php',
    'Tuleap\\SVN\\SiteAdmin\\DisplayTuleapPMParamsController' => $baseDir . '/include/SVN/SiteAdmin/DisplayTuleapPMParamsController.php',
    'Tuleap\\SVN\\SiteAdmin\\MaxFileSizePresenter' => $baseDir . '/include/SVN/SiteAdmin/MaxFileSizePresenter.php',
    'Tuleap\\SVN\\SiteAdmin\\UpdateMaxFileSizeController' => $baseDir . '/include/SVN/SiteAdmin/UpdateMaxFileSizeController.php',
    'Tuleap\\SVN\\SiteAdmin\\UpdateTuleapPMParamsController' => $baseDir . '/include/SVN/SiteAdmin/UpdateTuleapPMParamsController.php',
    'Tuleap\\SVN\\Statistic\\SCMUsageCollector' => $baseDir . '/include/SVN/Statistic/SCMUsageCollector.php',
    'Tuleap\\SVN\\Statistic\\SCMUsageDao' => $baseDir . '/include/SVN/Statistic/SCMUsageDao.php',
    'Tuleap\\SVN\\Statistic\\ServiceUsageCollector' => $baseDir . '/include/SVN/Statistic/ServiceUsageCollector.php',
    'Tuleap\\SVN\\Statistic\\ServiceUsageDao' => $baseDir . '/include/SVN/Statistic/ServiceUsageDao.php',
    'Tuleap\\SVN\\SvnAdmin' => $baseDir . '/include/SVN/SvnAdmin.php',
    'Tuleap\\SVN\\SvnPermissionManager' => $baseDir . '/include/SVN/SvnPermissionManager.php',
    'Tuleap\\SVN\\SvnRouter' => $baseDir . '/include/SVN/SvnRouter.php',
    'Tuleap\\SVN\\UserCannotAdministrateRepositoryException' => $baseDir . '/include/SVN/UserCannotAdministrateRepositoryException.php',
    'Tuleap\\SVN\\ViewVC\\AccessHistoryDao' => $baseDir . '/include/SVN/ViewVC/AccessHistoryDao.php',
    'Tuleap\\SVN\\ViewVC\\AccessHistorySaver' => $baseDir . '/include/SVN/ViewVC/AccessHistorySaver.php',
    'Tuleap\\SVN\\ViewVC\\ViewVCProxy' => $baseDir . '/include/SVN/ViewVC/ViewVCProxy.php',
    'Tuleap\\SVN\\XMLImporter' => $baseDir . '/include/SVN/XMLImporter.php',
    'Tuleap\\SVN\\XMLImporterException' => $baseDir . '/include/SVN/XMLImporterException.php',
    'Tuleap\\SVN\\XMLRepositoryImporter' => $baseDir . '/include/SVN/XMLRepositoryImporter.php',
    'Tuleap\\SVN\\XMLSvnExporter' => $baseDir . '/include/SVN/XMLSvnExporter.php',
    'Tuleap\\SVN\\XMLUserChecker' => $baseDir . '/include/SVN/XMLUserChecker.php',
);
