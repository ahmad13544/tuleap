<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5c8cf861580b115282c01597018ce63c
{
    public static $files = array (
        '646513771c75bf4ec8eb284524825d53' => __DIR__ . '/../..' . '/include/constants.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tuleap\\TestManagement\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tuleap\\TestManagement\\' => 
        array (
            0 => __DIR__ . '/../..' . '/include/TestManagement',
            1 => __DIR__ . '/../..' . '/include',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Tuleap\\TestManagement\\Administration\\AdminController' => __DIR__ . '/../..' . '/include/TestManagement/Administration/AdminController.class.php',
        'Tuleap\\TestManagement\\Administration\\AdminPresenter' => __DIR__ . '/../..' . '/include/TestManagement/Administration/AdminPresenter.class.php',
        'Tuleap\\TestManagement\\Administration\\AdminTrackerPresenter' => __DIR__ . '/../..' . '/include/TestManagement/Administration/AdminTrackerPresenter.php',
        'Tuleap\\TestManagement\\Administration\\AdminTrackersRetriever' => __DIR__ . '/../..' . '/include/TestManagement/Administration/AdminTrackersRetriever.php',
        'Tuleap\\TestManagement\\Administration\\FieldUsageDetector' => __DIR__ . '/../..' . '/include/TestManagement/Administration/FieldUsageDetector.php',
        'Tuleap\\TestManagement\\Administration\\InvalidTrackerIdProvidedException' => __DIR__ . '/../..' . '/include/TestManagement/Administration/InvalidTrackerIdProvidedException.php',
        'Tuleap\\TestManagement\\Administration\\ListOfAdminTrackersPresenter' => __DIR__ . '/../..' . '/include/TestManagement/Administration/ListOfAdminTrackersPresenter.php',
        'Tuleap\\TestManagement\\Administration\\TrackerChecker' => __DIR__ . '/../..' . '/include/TestManagement/Administration/TrackerChecker.php',
        'Tuleap\\TestManagement\\Administration\\TrackerDoesntExistException' => __DIR__ . '/../..' . '/include/TestManagement/Administration/TrackerDoesntExistException.php',
        'Tuleap\\TestManagement\\Administration\\TrackerHasAtLeastOneFrozenFieldsPostActionException' => __DIR__ . '/../..' . '/include/TestManagement/Administration/TrackerHasAtLeastOneFrozenFieldsPostActionException.php',
        'Tuleap\\TestManagement\\Administration\\TrackerHasAtLeastOneHiddenFieldsetsPostActionException' => __DIR__ . '/../..' . '/include/TestManagement/Administration/TrackerHasAtLeastOneHiddenFieldsetsPostActionException.php',
        'Tuleap\\TestManagement\\Administration\\TrackerIsDeletedException' => __DIR__ . '/../..' . '/include/TestManagement/Administration/TrackerIsDeletedException.php',
        'Tuleap\\TestManagement\\Administration\\TrackerNotInProjectException' => __DIR__ . '/../..' . '/include/TestManagement/Administration/TrackerNotInProjectException.php',
        'Tuleap\\TestManagement\\ArtifactDao' => __DIR__ . '/../..' . '/include/TestManagement/ArtifactDao.php',
        'Tuleap\\TestManagement\\ArtifactFactory' => __DIR__ . '/../..' . '/include/TestManagement/ArtifactFactory.php',
        'Tuleap\\TestManagement\\Breadcrumbs\\AdmininistrationBreadcrumbs' => __DIR__ . '/../..' . '/include/TestManagement/Breadcrumbs/AdmininistrationBreadcrumbs.php',
        'Tuleap\\TestManagement\\Breadcrumbs\\Breadcrumbs' => __DIR__ . '/../..' . '/include/TestManagement/Breadcrumbs/Breadcrumbs.php',
        'Tuleap\\TestManagement\\Breadcrumbs\\NoCrumb' => __DIR__ . '/../..' . '/include/TestManagement/Breadcrumbs/NoCrumb.php',
        'Tuleap\\TestManagement\\Campaign\\ArtifactNotFoundException' => __DIR__ . '/../..' . '/include/TestManagement/Campaign/ArtifactNotFoundException.php',
        'Tuleap\\TestManagement\\Campaign\\AutomatedTests\\AutomatedTestsTriggerer' => __DIR__ . '/../..' . '/include/TestManagement/Campaign/AutomatedTests/AutomatedTestsTriggerer.php',
        'Tuleap\\TestManagement\\Campaign\\AutomatedTests\\NoJobConfiguredForCampaignException' => __DIR__ . '/../..' . '/include/TestManagement/Campaign/AutomatedTests/NoJobConfiguredForCampaignException.php',
        'Tuleap\\TestManagement\\Campaign\\Campaign' => __DIR__ . '/../..' . '/include/TestManagement/Campaign/Campaign.php',
        'Tuleap\\TestManagement\\Campaign\\CampaignDao' => __DIR__ . '/../..' . '/include/TestManagement/Campaign/CampaignDao.php',
        'Tuleap\\TestManagement\\Campaign\\CampaignRetriever' => __DIR__ . '/../..' . '/include/TestManagement/Campaign/CampaignRetriever.php',
        'Tuleap\\TestManagement\\Campaign\\CampaignSaver' => __DIR__ . '/../..' . '/include/TestManagement/Campaign/CampaignSaver.php',
        'Tuleap\\TestManagement\\Campaign\\CloseCampaignController' => __DIR__ . '/../..' . '/include/TestManagement/Campaign/CloseCampaignController.php',
        'Tuleap\\TestManagement\\Campaign\\Execution\\DefinitionForExecutionRetriever' => __DIR__ . '/../..' . '/include/TestManagement/Campaign/Execution/DefinitionForExecutionRetriever.php',
        'Tuleap\\TestManagement\\Campaign\\Execution\\DefinitionNotFoundException' => __DIR__ . '/../..' . '/include/TestManagement/Campaign/Execution/DefinitionNotFoundException.php',
        'Tuleap\\TestManagement\\Campaign\\Execution\\ExecutionDao' => __DIR__ . '/../..' . '/include/TestManagement/Campaign/Execution/ExecutionDao.php',
        'Tuleap\\TestManagement\\Campaign\\Execution\\PaginatedExecutions' => __DIR__ . '/../..' . '/include/TestManagement/Campaign/Execution/PaginatedExecutions.php',
        'Tuleap\\TestManagement\\Campaign\\InformationNeededToRetrieveTestStatusOfACampaign' => __DIR__ . '/../..' . '/include/TestManagement/Campaign/InformationNeededToRetrieveTestStatusOfACampaign.php',
        'Tuleap\\TestManagement\\Campaign\\JobConfiguration' => __DIR__ . '/../..' . '/include/TestManagement/Campaign/JobConfiguration.php',
        'Tuleap\\TestManagement\\Campaign\\NoJobConfiguration' => __DIR__ . '/../..' . '/include/TestManagement/Campaign/NoJobConfiguration.php',
        'Tuleap\\TestManagement\\Campaign\\OpenCampaignController' => __DIR__ . '/../..' . '/include/TestManagement/Campaign/OpenCampaignController.php',
        'Tuleap\\TestManagement\\Campaign\\StatusChangedRedirectURLBuilder' => __DIR__ . '/../..' . '/include/TestManagement/Campaign/StatusChangedRedirectURLBuilder.php',
        'Tuleap\\TestManagement\\Campaign\\StatusUpdater' => __DIR__ . '/../..' . '/include/TestManagement/Campaign/StatusUpdater.php',
        'Tuleap\\TestManagement\\Campaign\\TestExecutionTestStatusDAO' => __DIR__ . '/../..' . '/include/TestManagement/Campaign/TestExecutionTestStatusDAO.php',
        'Tuleap\\TestManagement\\Config' => __DIR__ . '/../..' . '/include/TestManagement/Config.class.php',
        'Tuleap\\TestManagement\\ConfigConformanceValidator' => __DIR__ . '/../..' . '/include/TestManagement/ConfigConformanceValidator.class.php',
        'Tuleap\\TestManagement\\Criterion\\ISearchOnMilestone' => __DIR__ . '/../..' . '/include/TestManagement/Criterion/ISearchOnMilestone.php',
        'Tuleap\\TestManagement\\Criterion\\ISearchOnStatus' => __DIR__ . '/../..' . '/include/TestManagement/Criterion/ISearchOnStatus.php',
        'Tuleap\\TestManagement\\Criterion\\MilestoneAll' => __DIR__ . '/../..' . '/include/TestManagement/Criterion/MilestoneAll.php',
        'Tuleap\\TestManagement\\Criterion\\MilestoneFilter' => __DIR__ . '/../..' . '/include/TestManagement/Criterion/MilestoneFilter.php',
        'Tuleap\\TestManagement\\Criterion\\StatusAll' => __DIR__ . '/../..' . '/include/TestManagement/Criterion/StatusAll.php',
        'Tuleap\\TestManagement\\Criterion\\StatusClosed' => __DIR__ . '/../..' . '/include/TestManagement/Criterion/StatusClosed.php',
        'Tuleap\\TestManagement\\Criterion\\StatusOpen' => __DIR__ . '/../..' . '/include/TestManagement/Criterion/StatusOpen.php',
        'Tuleap\\TestManagement\\Dao' => __DIR__ . '/../..' . '/include/TestManagement/Dao.class.php',
        'Tuleap\\TestManagement\\Event\\GetItemsFromMilestone' => __DIR__ . '/../..' . '/include/TestManagement/Event/GetItemsFromMilestone.php',
        'Tuleap\\TestManagement\\Event\\GetMilestone' => __DIR__ . '/../..' . '/include/TestManagement/Event/GetMilestone.php',
        'Tuleap\\TestManagement\\FirstConfigCreator' => __DIR__ . '/../..' . '/include/TestManagement/FirstConfigCreator.class.php',
        'Tuleap\\TestManagement\\GetURIForMilestoneFromTTM' => __DIR__ . '/../..' . '/include/TestManagement/GetURIForMilestoneFromTTM.php',
        'Tuleap\\TestManagement\\Heartbeat\\HeartbeatArtifactTrackerExcluder' => __DIR__ . '/../..' . '/include/TestManagement/Heartbeat/HeartbeatArtifactTrackerExcluder.php',
        'Tuleap\\TestManagement\\Heartbeat\\LatestHeartbeatsCollector' => __DIR__ . '/../..' . '/include/TestManagement/Heartbeat/LatestHeartbeatsCollector.php',
        'Tuleap\\TestManagement\\IRetrieveTestExecutionTrackerIdFromConfig' => __DIR__ . '/../..' . '/include/TestManagement/IRetrieveTestExecutionTrackerIdFromConfig.php',
        'Tuleap\\TestManagement\\IndexController' => __DIR__ . '/../..' . '/include/TestManagement/IndexController.class.php',
        'Tuleap\\TestManagement\\IndexPresenter' => __DIR__ . '/../..' . '/include/TestManagement/IndexPresenter.class.php',
        'Tuleap\\TestManagement\\LabelFieldNotFoundException' => __DIR__ . '/../..' . '/include/TestManagement/LabelFieldNotFoundException.class.php',
        'Tuleap\\TestManagement\\LegacyRoutingController' => __DIR__ . '/../..' . '/include/TestManagement/LegacyRoutingController.php',
        'Tuleap\\TestManagement\\MalformedQueryParameterException' => __DIR__ . '/../..' . '/include/TestManagement/MalformedQueryParameterException.php',
        'Tuleap\\TestManagement\\MilestoneItemsArtifactFactory' => __DIR__ . '/../..' . '/include/TestManagement/REST/MilestoneItemsArtifactFactory.php',
        'Tuleap\\TestManagement\\MissingArtifactLinkException' => __DIR__ . '/../..' . '/include/TestManagement/MissingArtifactLinkException.php',
        'Tuleap\\TestManagement\\PaginatedCampaignsRepresentations' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/PaginatedCampaignsRepresentations.php',
        'Tuleap\\TestManagement\\QueryToCriterionConverter' => __DIR__ . '/../..' . '/include/TestManagement/QueryToCriterionConverter.php',
        'Tuleap\\TestManagement\\REST\\ExecutionChangesExtractor' => __DIR__ . '/../..' . '/include/TestManagement/REST/ExecutionChangesExtractor.php',
        'Tuleap\\TestManagement\\REST\\FormattedChangesetValueForFileFieldRetriever' => __DIR__ . '/../..' . '/include/TestManagement/REST/FormattedChangesetValueForFileFieldRetriever.php',
        'Tuleap\\TestManagement\\REST\\FormattedChangesetValueForIntFieldRetriever' => __DIR__ . '/../..' . '/include/TestManagement/REST/FormattedChangesetValueForIntFieldRetriever.php',
        'Tuleap\\TestManagement\\REST\\FormattedChangesetValueForListFieldRetriever' => __DIR__ . '/../..' . '/include/TestManagement/REST/FormattedChangesetValueForListFieldRetriever.php',
        'Tuleap\\TestManagement\\REST\\FormattedChangesetValueForTextFieldRetriever' => __DIR__ . '/../..' . '/include/TestManagement/REST/FormattedChangesetValueForTextFieldRetriever.php',
        'Tuleap\\TestManagement\\REST\\ResourcesInjector' => __DIR__ . '/../..' . '/include/TestManagement/REST/ResourcesInjector.class.php',
        'Tuleap\\TestManagement\\REST\\v1\\ArtifactNodeBuilder' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/ArtifactNodeBuilder.php',
        'Tuleap\\TestManagement\\REST\\v1\\ArtifactNodeDao' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/ArtifactNodeDao.php',
        'Tuleap\\TestManagement\\REST\\v1\\AssignedToRepresentationBuilder' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/AssignedToRepresentationBuilder.php',
        'Tuleap\\TestManagement\\REST\\v1\\AttachmentRepresentation' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/AttachmentRepresentation.php',
        'Tuleap\\TestManagement\\REST\\v1\\AutomatedTestsNotXmlException' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/AutomatedTestsNotXmlException.php',
        'Tuleap\\TestManagement\\REST\\v1\\AutomatedTestsResultPATCHRepresentation' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/AutomatedTestsResultPATCHRepresentation.php',
        'Tuleap\\TestManagement\\REST\\v1\\BugRepresentation' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/BugRepresentation.php',
        'Tuleap\\TestManagement\\REST\\v1\\CampaignArtifactUpdateFieldValuesBuilder' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/CampaignArtifactUpdateFieldValuesBuilder.php',
        'Tuleap\\TestManagement\\REST\\v1\\CampaignCreator' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/CampaignCreator.class.php',
        'Tuleap\\TestManagement\\REST\\v1\\CampaignRepresentation' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/CampaignRepresentation.class.php',
        'Tuleap\\TestManagement\\REST\\v1\\CampaignRepresentationBuilder' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/CampaignRepresentationBuilder.php',
        'Tuleap\\TestManagement\\REST\\v1\\CampaignUpdater' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/CampaignUpdater.php',
        'Tuleap\\TestManagement\\REST\\v1\\CampaignsResource' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/CampaignsResource.class.php',
        'Tuleap\\TestManagement\\REST\\v1\\DefinitionRepresentations\\DefinitionCommonmarkRepresentation' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/DefinitionRepresentations/DefinitionCommonmarkRepresentation.php',
        'Tuleap\\TestManagement\\REST\\v1\\DefinitionRepresentations\\DefinitionDescriptionFormatNotFoundException' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/DefinitionRepresentations/DefinitionDescriptionFormatNotFoundException.php',
        'Tuleap\\TestManagement\\REST\\v1\\DefinitionRepresentations\\DefinitionRepresentation' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/DefinitionRepresentations/DefinitionRepresentation.php',
        'Tuleap\\TestManagement\\REST\\v1\\DefinitionRepresentations\\DefinitionRepresentationBuilder' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/DefinitionRepresentations/DefinitionRepresentationBuilder.php',
        'Tuleap\\TestManagement\\REST\\v1\\DefinitionRepresentations\\DefinitionTextOrHTMLRepresentation' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/DefinitionRepresentations/DefinitionTextOrHTMLRepresentation.php',
        'Tuleap\\TestManagement\\REST\\v1\\DefinitionRepresentations\\MinimalDefinitionRepresentation' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/DefinitionRepresentations/MinimalDefinitionRepresentation.php',
        'Tuleap\\TestManagement\\REST\\v1\\DefinitionRepresentations\\StepDefinitionRepresentations\\StepDefinitionFormatNotFoundException' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/DefinitionRepresentations/StepDefinitionRepresentations/StepDefinitionFormatNotFoundException.php',
        'Tuleap\\TestManagement\\REST\\v1\\DefinitionRepresentations\\StepDefinitionRepresentations\\StepDefinitionRepresentation' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/DefinitionRepresentations/StepDefinitionRepresentations/StepDefinitionRepresentation.php',
        'Tuleap\\TestManagement\\REST\\v1\\DefinitionRepresentations\\StepDefinitionRepresentations\\StepDefinitionRepresentationBuilder' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/DefinitionRepresentations/StepDefinitionRepresentations/StepDefinitionRepresentationBuilder.php',
        'Tuleap\\TestManagement\\REST\\v1\\DefinitionRepresentations\\StepDefinitionRepresentations\\StepDefinitionTextField' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/DefinitionRepresentations/StepDefinitionRepresentations/StepDefinitionTextField.php',
        'Tuleap\\TestManagement\\REST\\v1\\DefinitionSelector' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/DefinitionSelector.php',
        'Tuleap\\TestManagement\\REST\\v1\\DefinitionsResource' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/DefinitionsResource.class.php',
        'Tuleap\\TestManagement\\REST\\v1\\ExecutionCreator' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/ExecutionCreator.class.php',
        'Tuleap\\TestManagement\\REST\\v1\\ExecutionFromAutomatedTestsUpdater' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/ExecutionFromAutomatedTestsUpdater.php',
        'Tuleap\\TestManagement\\REST\\v1\\ExecutionRepresentation' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/ExecutionRepresentation.php',
        'Tuleap\\TestManagement\\REST\\v1\\ExecutionRepresentationBuilder' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/ExecutionRepresentationBuilder.php',
        'Tuleap\\TestManagement\\REST\\v1\\ExecutionStatusUpdater' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/ExecutionStatusUpdater.php',
        'Tuleap\\TestManagement\\REST\\v1\\ExecutionWithAutomatedTestData' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/ExecutionWithAutomatedTestData.php',
        'Tuleap\\TestManagement\\REST\\v1\\ExecutionWithAutomatedTestDataProvider' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/ExecutionWithAutomatedTestDataProvider.php',
        'Tuleap\\TestManagement\\REST\\v1\\Execution\\ListOfDefinitionsForCampaignRetriever' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/Execution/ListOfDefinitionsForCampaignRetriever.php',
        'Tuleap\\TestManagement\\REST\\v1\\Execution\\StepsResultsFilter' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/Execution/StepsResultsFilter.php',
        'Tuleap\\TestManagement\\REST\\v1\\Execution\\StepsResultsRepresentationBuilder' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/Execution/StepsResultsRepresentationBuilder.php',
        'Tuleap\\TestManagement\\REST\\v1\\ExecutionsResource' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/ExecutionsResource.class.php',
        'Tuleap\\TestManagement\\REST\\v1\\ExtractedTestResultFromJunit' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/ExtractedTestResultFromJunit.php',
        'Tuleap\\TestManagement\\REST\\v1\\JobConfigurationRepresentation' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/JobConfigurationRepresentation.php',
        'Tuleap\\TestManagement\\REST\\v1\\ListOfExecutionsWithAutomatedTestDataRetriever' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/ListOfExecutionsWithAutomatedTestDataRetriever.php',
        'Tuleap\\TestManagement\\REST\\v1\\MilestoneRepresentation' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/MilestoneRepresentation.class.php',
        'Tuleap\\TestManagement\\REST\\v1\\NodeBuilderFactory' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/NodeBuilderFactory.php',
        'Tuleap\\TestManagement\\REST\\v1\\NodeReferenceRepresentation' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/NodeReferenceRepresentation.php',
        'Tuleap\\TestManagement\\REST\\v1\\NodeRepresentation' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/NodeRepresentation.php',
        'Tuleap\\TestManagement\\REST\\v1\\NodeResource' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/NodesResource.class.php',
        'Tuleap\\TestManagement\\REST\\v1\\PATCHExecutionRepresentation' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/PATCHExecutionRepresentation.php',
        'Tuleap\\TestManagement\\REST\\v1\\PreviousResultRepresentation' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/PreviousResultRepresentation.php',
        'Tuleap\\TestManagement\\REST\\v1\\ProjectResource' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/ProjectResource.class.php',
        'Tuleap\\TestManagement\\REST\\v1\\RequirementRetriever' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/RequirementRetriever.php',
        'Tuleap\\TestManagement\\REST\\v1\\SlicedExecutionRepresentations' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/SlicedExecutionRepresentations.php',
        'Tuleap\\TestManagement\\REST\\v1\\StepResultRepresentation' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/StepResultRepresentation.php',
        'Tuleap\\TestManagement\\REST\\v1\\StepsResultsChangesBuilder' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/StepsResultsChangesBuilder.php',
        'Tuleap\\TestManagement\\REST\\v1\\TestCaseExecutionPresenter' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/TestsDataJUnitExtraction/TestCaseExecutionPresenter.php',
        'Tuleap\\TestManagement\\REST\\v1\\TestStatusAccordingToStepsStatusChangesBuilder' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/TestStatusAccordingToStepsStatusChangesBuilder.php',
        'Tuleap\\TestManagement\\REST\\v1\\TestSuiteExecutionPresenter' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/TestsDataJUnitExtraction/TestSuiteExecutionPresenter.php',
        'Tuleap\\TestManagement\\REST\\v1\\TestsDataFromJunitExtractor' => __DIR__ . '/../..' . '/include/TestManagement/REST/v1/TestsDataJUnitExtraction/TestsDataFromJunitExtractor.php',
        'Tuleap\\TestManagement\\RealTime\\RealTimeMessageSender' => __DIR__ . '/../..' . '/include/RealTime/RealTimeMessageSender.php',
        'Tuleap\\TestManagement\\Router' => __DIR__ . '/../..' . '/include/TestManagement/Router.class.php',
        'Tuleap\\TestManagement\\Service' => __DIR__ . '/../..' . '/include/TestManagement/Service.class.php',
        'Tuleap\\TestManagement\\StartTestManagementController' => __DIR__ . '/../..' . '/include/TestManagement/StartTestManagementController.php',
        'Tuleap\\TestManagement\\StartTestManagementPresenter' => __DIR__ . '/../..' . '/include/TestManagement/StartTestManagementPresenter.php',
        'Tuleap\\TestManagement\\Step\\Definition\\Field\\StepDefinition' => __DIR__ . '/../..' . '/include/TestManagement/Step/Definition/Field/StepDefinition.php',
        'Tuleap\\TestManagement\\Step\\Definition\\Field\\StepDefinitionChangesetValue' => __DIR__ . '/../..' . '/include/TestManagement/Step/Definition/Field/StepDefinitionChangesetValue.php',
        'Tuleap\\TestManagement\\Step\\Definition\\Field\\StepDefinitionChangesetValueDao' => __DIR__ . '/../..' . '/include/TestManagement/Step/Definition/Field/StepDefinitionChangesetValueDao.php',
        'Tuleap\\TestManagement\\Step\\Definition\\Field\\StepDefinitionDataConverter' => __DIR__ . '/../..' . '/include/TestManagement/Step/Definition/Field/StepDefinitionDataConverter.php',
        'Tuleap\\TestManagement\\Step\\Definition\\Field\\StepDefinitionSubmittedValuesTransformator' => __DIR__ . '/../..' . '/include/TestManagement/Step/Definition/Field/StepDefinitionSubmittedValuesTransformator.php',
        'Tuleap\\TestManagement\\Step\\Definition\\Field\\ViewAdmin' => __DIR__ . '/../..' . '/include/TestManagement/Step/Definition/Field/ViewAdmin.php',
        'Tuleap\\TestManagement\\Step\\Definition\\Field\\XML\\XMLStepDefinition' => __DIR__ . '/../..' . '/include/TestManagement/Step/Definition/Field/XML/XMLStepDefinition.php',
        'Tuleap\\TestManagement\\Step\\Execution\\Field\\StepExecution' => __DIR__ . '/../..' . '/include/TestManagement/Step/Execution/Field/StepExecution.php',
        'Tuleap\\TestManagement\\Step\\Execution\\Field\\StepExecutionChangesetValue' => __DIR__ . '/../..' . '/include/TestManagement/Step/Execution/Field/StepExecutionChangesetValue.php',
        'Tuleap\\TestManagement\\Step\\Execution\\Field\\StepExecutionChangesetValueDao' => __DIR__ . '/../..' . '/include/TestManagement/Step/Execution/Field/StepExecutionChangesetValueDao.php',
        'Tuleap\\TestManagement\\Step\\Execution\\Field\\ViewAdmin' => __DIR__ . '/../..' . '/include/TestManagement/Step/Execution/Field/ViewAdmin.php',
        'Tuleap\\TestManagement\\Step\\Execution\\StepResult' => __DIR__ . '/../..' . '/include/TestManagement/Step/Execution/StepResult.php',
        'Tuleap\\TestManagement\\Step\\Execution\\StepResultPresenter' => __DIR__ . '/../..' . '/include/TestManagement/Step/Execution/StepResultPresenter.php',
        'Tuleap\\TestManagement\\Step\\Step' => __DIR__ . '/../..' . '/include/TestManagement/Step/Step.php',
        'Tuleap\\TestManagement\\Step\\StepChecker' => __DIR__ . '/../..' . '/include/TestManagement/Step/StepChecker.php',
        'Tuleap\\TestManagement\\Step\\StepPresenter' => __DIR__ . '/../..' . '/include/TestManagement/Step/StepPresenter.php',
        'Tuleap\\TestManagement\\TestManagementController' => __DIR__ . '/../..' . '/include/TestManagement/TestManagementController.php',
        'Tuleap\\TestManagement\\TestManagementPluginDescriptor' => __DIR__ . '/../..' . '/include/TestManagement/TestManagementPluginDescriptor.class.php',
        'Tuleap\\TestManagement\\TestManagementPluginInfo' => __DIR__ . '/../..' . '/include/TestManagement/TestManagementPluginInfo.class.php',
        'Tuleap\\TestManagement\\TestmanagementConfigTracker' => __DIR__ . '/../..' . '/include/TestManagement/TestmanagementConfigTracker.php',
        'Tuleap\\TestManagement\\TestmanagementTrackersConfiguration' => __DIR__ . '/../..' . '/include/TestManagement/TestmanagementTrackersConfiguration.php',
        'Tuleap\\TestManagement\\TestmanagementTrackersConfigurator' => __DIR__ . '/../..' . '/include/TestManagement/TestmanagementTrackersConfigurator.php',
        'Tuleap\\TestManagement\\TestmanagementTrackersCreator' => __DIR__ . '/../..' . '/include/TestManagement/TestmanagementTrackersCreator.php',
        'Tuleap\\TestManagement\\TrackerComesFromLegacyEngineException' => __DIR__ . '/../..' . '/include/TestManagement/TrackerComesFromLegacyEngineException.php',
        'Tuleap\\TestManagement\\TrackerDefinitionNotValidException' => __DIR__ . '/../..' . '/include/TestManagement/TrackerDefinitionNotValidException.php',
        'Tuleap\\TestManagement\\TrackerExecutionNotValidException' => __DIR__ . '/../..' . '/include/TestManagement/TrackerExecutionNotValidException.php',
        'Tuleap\\TestManagement\\TrackerNotCreatedException' => __DIR__ . '/../..' . '/include/TestManagement/TrackerNotCreatedException.php',
        'Tuleap\\TestManagement\\Type\\TypeCoveredByOverrider' => __DIR__ . '/../..' . '/include/TestManagement/Type/TypeCoveredByOverrider.php',
        'Tuleap\\TestManagement\\Type\\TypeCoveredByPresenter' => __DIR__ . '/../..' . '/include/TestManagement/Type/TypeCoveredByPresenter.php',
        'Tuleap\\TestManagement\\UserIsNotAdministratorException' => __DIR__ . '/../..' . '/include/TestManagement/UserIsNotAdministratorException.php',
        'Tuleap\\TestManagement\\Workflow\\PostActionChecker' => __DIR__ . '/../..' . '/include/TestManagement/Workflow/PostActionChecker.php',
        'Tuleap\\TestManagement\\XML\\Exporter' => __DIR__ . '/../..' . '/include/TestManagement/XML/Exporter.php',
        'Tuleap\\TestManagement\\XML\\ImportXMLFromTracker' => __DIR__ . '/../..' . '/include/TestManagement/XML/ImportXMLFromTracker.php',
        'Tuleap\\TestManagement\\XML\\StepXMLExporter' => __DIR__ . '/../..' . '/include/TestManagement/XML/StepXMLExporter.php',
        'Tuleap\\TestManagement\\XML\\TrackerArtifactXMLImportXMLImportFieldStrategySteps' => __DIR__ . '/../..' . '/include/TestManagement/XML/TrackerArtifactXMLImportXMLImportFieldStrategySteps.php',
        'Tuleap\\TestManagement\\XML\\TrackerXMLExporterChangesetValueStepDefinitionXMLExporter' => __DIR__ . '/../..' . '/include/TestManagement/XML/TrackerXMLExporterChangesetValueStepDefinitionXMLExporter.php',
        'Tuleap\\TestManagement\\XML\\XMLImport' => __DIR__ . '/../..' . '/include/TestManagement/XML/XMLImport.php',
        'testmanagementPlugin' => __DIR__ . '/../..' . '/include/testmanagementPlugin.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5c8cf861580b115282c01597018ce63c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5c8cf861580b115282c01597018ce63c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5c8cf861580b115282c01597018ce63c::$classMap;

        }, null, ClassLoader::class);
    }
}