<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6493fe2d27cb3db0efdb27c96a0974ed
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tuleap\\Statistics\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tuleap\\Statistics\\' => 
        array (
            0 => __DIR__ . '/../..' . '/include',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'ProjectQuotaHtml' => __DIR__ . '/../..' . '/include/ProjectQuotaHtml.class.php',
        'ProjectQuotaManager' => __DIR__ . '/../..' . '/include/ProjectQuotaManager.class.php',
        'StatisticsAggregatorDao' => __DIR__ . '/../..' . '/include/StatisticsAggregatorDao.class.php',
        'StatisticsPlugin' => __DIR__ . '/../..' . '/include/statisticsPlugin.php',
        'StatisticsPluginDescriptor' => __DIR__ . '/../..' . '/include/StatisticsPluginDescriptor.class.php',
        'StatisticsPluginInfo' => __DIR__ . '/../..' . '/include/StatisticsPluginInfo.class.php',
        'Statistics_ConfigurationDao' => __DIR__ . '/../..' . '/include/Statistics_ConfigurationDao.class.php',
        'Statistics_ConfigurationManager' => __DIR__ . '/../..' . '/include/Statistics_ConfigurationManager.class.php',
        'Statistics_DiskUsageDao' => __DIR__ . '/../..' . '/include/Statistics_DiskUsageDao.class.php',
        'Statistics_DiskUsageGraph' => __DIR__ . '/../..' . '/include/Statistics_DiskUsageGraph.class.php',
        'Statistics_DiskUsageHtml' => __DIR__ . '/../..' . '/include/Statistics_DiskUsageHtml.class.php',
        'Statistics_DiskUsageManager' => __DIR__ . '/../..' . '/include/Statistics_DiskUsageManager.class.php',
        'Statistics_DiskUsageOutput' => __DIR__ . '/../..' . '/include/Statistics_DiskUsageOutput.class.php',
        'Statistics_DiskUsagePurger' => __DIR__ . '/../..' . '/include/Statistics_DiskUsagePurger.class.php',
        'Statistics_Formatter' => __DIR__ . '/../..' . '/include/Statistics_Formatter.class.php',
        'Statistics_Formatter_Cvs' => __DIR__ . '/../..' . '/include/Statistics_Formatter_Cvs.class.php',
        'Statistics_Formatter_Scm' => __DIR__ . '/../..' . '/include/Statistics_Formatter_Scm.class.php',
        'Statistics_Formatter_Svn' => __DIR__ . '/../..' . '/include/Statistics_Formatter_Svn.class.php',
        'Statistics_ProjectQuotaDao' => __DIR__ . '/../..' . '/include/Statistics_ProjectQuotaDao.class.php',
        'Statistics_SOAPServer' => __DIR__ . '/../..' . '/include/Statistics_SOAPServer.class.php',
        'Statistics_ScmCvsDao' => __DIR__ . '/../..' . '/include/Statistics_ScmCvsDao.class.php',
        'Statistics_ScmSvnDao' => __DIR__ . '/../..' . '/include/Statistics_ScmSvnDao.class.php',
        'Statistics_ServicesUsageDao' => __DIR__ . '/../..' . '/include/Statistics_ServicesUsageDao.class.php',
        'Statistics_Services_UsageFormatter' => __DIR__ . '/../..' . '/include/Statistics_Services_UsageFormatter.class.php',
        'Statistics_Widget_ProjectStatistics' => __DIR__ . '/../..' . '/include/Statistics_Widget_ProjectStatistics.class.php',
        'SystemEventQueueStatistics' => __DIR__ . '/../..' . '/include/SystemEventQueueStatistics.php',
        'SystemEvent_STATISTICS_DAILY' => __DIR__ . '/../..' . '/include/SystemEvent_STATISTICS_DAILY.php',
        'Tuleap\\Statistics\\AdminHeaderPresenter' => __DIR__ . '/../..' . '/include/AdminHeaderPresenter.php',
        'Tuleap\\Statistics\\CSV\\CSVBuilder' => __DIR__ . '/../..' . '/include/CSV/CSVBuilder.php',
        'Tuleap\\Statistics\\DataExportPresenter' => __DIR__ . '/../..' . '/include/DataExportPresenter.php',
        'Tuleap\\Statistics\\DataExportPresenterBuilder' => __DIR__ . '/../..' . '/include/DataExportPresenterBuilder.php',
        'Tuleap\\Statistics\\DataExportRouter' => __DIR__ . '/../..' . '/include/DataExportRouter.php',
        'Tuleap\\Statistics\\DiskUsageGlobalPresenter' => __DIR__ . '/../..' . '/include/DiskUsageGlobalPresenter.php',
        'Tuleap\\Statistics\\DiskUsageGlobalPresenterBuilder' => __DIR__ . '/../..' . '/include/DiskUsageGlobalPresenterBuilder.php',
        'Tuleap\\Statistics\\DiskUsagePie\\DiskUsagePieDisplayer' => __DIR__ . '/../..' . '/include/DiskUsagePie/DiskUsagePieDisplayer.php',
        'Tuleap\\Statistics\\DiskUsagePie\\DiskUsagePieMountPointPresenter' => __DIR__ . '/../..' . '/include/DiskUsagePie/DiskUsagePieMountPointPresenter.php',
        'Tuleap\\Statistics\\DiskUsageProjectsPresenter' => __DIR__ . '/../..' . '/include/DiskUsageProjectsPresenter.php',
        'Tuleap\\Statistics\\DiskUsageProjectsPresenterBuilder' => __DIR__ . '/../..' . '/include/DiskUsageProjectsPresenterBuilder.php',
        'Tuleap\\Statistics\\DiskUsageProjectsSearchFieldsPresenter' => __DIR__ . '/../..' . '/include/DiskUsageProjectsSearchFieldsPresenter.php',
        'Tuleap\\Statistics\\DiskUsageRouter' => __DIR__ . '/../..' . '/include/DiskUsageRouter.php',
        'Tuleap\\Statistics\\DiskUsageSearchFieldsPresenter' => __DIR__ . '/../..' . '/include/DiskUsageSearchFieldsPresenter.php',
        'Tuleap\\Statistics\\DiskUsageServicesPresenter' => __DIR__ . '/../..' . '/include/DiskUsageServicesPresenter.php',
        'Tuleap\\Statistics\\DiskUsageServicesPresenterBuilder' => __DIR__ . '/../..' . '/include/DiskUsageServicesPresenterBuilder.php',
        'Tuleap\\Statistics\\DiskUsageServicesSearchFieldsPresenter' => __DIR__ . '/../..' . '/include/DiskUsageServicesSearchFieldsPresenter.php',
        'Tuleap\\Statistics\\DiskUsageTopUsersPresenter' => __DIR__ . '/../..' . '/include/DiskUsageTopUsersPresenter.php',
        'Tuleap\\Statistics\\DiskUsageTopUsersPresenterBuilder' => __DIR__ . '/../..' . '/include/DiskUsageTopUsersPresenterBuilder.php',
        'Tuleap\\Statistics\\DiskUsageUserDetailsPresenter' => __DIR__ . '/../..' . '/include/DiskUsageUserDetailsPresenter.php',
        'Tuleap\\Statistics\\DiskUsageUserDetailsPresenterBuilder' => __DIR__ . '/../..' . '/include/DiskUsageUserDetailsPresenterBuilder.php',
        'Tuleap\\Statistics\\DiskUsageUserDetailsSearchFieldsPresenter' => __DIR__ . '/../..' . '/include/DiskUsageUserDetailsSearchFieldsPresenter.php',
        'Tuleap\\Statistics\\DiskUsage\\ConcurrentVersionsSystem\\Collector' => __DIR__ . '/../..' . '/include/DiskUsage/ConcurrentVersionsSystem/Collector.php',
        'Tuleap\\Statistics\\DiskUsage\\ConcurrentVersionsSystem\\FullHistoryDao' => __DIR__ . '/../..' . '/include/DiskUsage/ConcurrentVersionsSystem/FullHistoryDao.php',
        'Tuleap\\Statistics\\DiskUsage\\ConcurrentVersionsSystem\\Retriever' => __DIR__ . '/../..' . '/include/DiskUsage/ConcurrentVersionsSystem/Retriever.php',
        'Tuleap\\Statistics\\DiskUsage\\Subversion\\Collector' => __DIR__ . '/../..' . '/include/DiskUsage/Subversion/Collector.php',
        'Tuleap\\Statistics\\DiskUsage\\Subversion\\Retriever' => __DIR__ . '/../..' . '/include/DiskUsage/Subversion/Retriever.php',
        'Tuleap\\Statistics\\Events\\StatisticsRefreshDiskUsage' => __DIR__ . '/../..' . '/include/Events/StatisticsRefreshDiskUsage.php',
        'Tuleap\\Statistics\\FrequenciesLabels' => __DIR__ . '/../..' . '/include/FrequenciesLabels.php',
        'Tuleap\\Statistics\\FrequenciesSamples' => __DIR__ . '/../..' . '/include/FrequenciesSamples.php',
        'Tuleap\\Statistics\\Frequencies\\FrequenciesPresenter' => __DIR__ . '/../..' . '/include/Frequencies/FrequenciesPresenter.php',
        'Tuleap\\Statistics\\Frequencies\\FrequenciesSearchFieldsPresenter' => __DIR__ . '/../..' . '/include/Frequencies/FrequenciesSearchFieldsPresenter.php',
        'Tuleap\\Statistics\\Frequencies\\GraphDataBuilder\\CartifactSample' => __DIR__ . '/../..' . '/include/Frequencies/GraphDataBuilders/CartifactSample.php',
        'Tuleap\\Statistics\\Frequencies\\GraphDataBuilder\\FiledSample' => __DIR__ . '/../..' . '/include/Frequencies/GraphDataBuilders/FiledSample.php',
        'Tuleap\\Statistics\\Frequencies\\GraphDataBuilder\\FilerSample' => __DIR__ . '/../..' . '/include/Frequencies/GraphDataBuilders/FilerSample.php',
        'Tuleap\\Statistics\\Frequencies\\GraphDataBuilder\\ForumSample' => __DIR__ . '/../..' . '/include/Frequencies/GraphDataBuilders/ForumSample.php',
        'Tuleap\\Statistics\\Frequencies\\GraphDataBuilder\\OartifactSample' => __DIR__ . '/../..' . '/include/Frequencies/GraphDataBuilders/OartifactSample.php',
        'Tuleap\\Statistics\\Frequencies\\GraphDataBuilder\\ProjectSample' => __DIR__ . '/../..' . '/include/Frequencies/GraphDataBuilders/ProjectSample.php',
        'Tuleap\\Statistics\\Frequencies\\GraphDataBuilder\\Sample' => __DIR__ . '/../..' . '/include/Frequencies/GraphDataBuilders/Sample.php',
        'Tuleap\\Statistics\\Frequencies\\GraphDataBuilder\\SampleFactory' => __DIR__ . '/../..' . '/include/Frequencies/GraphDataBuilders/SampleFactory.php',
        'Tuleap\\Statistics\\Frequencies\\GraphDataBuilder\\SampleGraph' => __DIR__ . '/../..' . '/include/Frequencies/GraphDataBuilders/SampleGraph.php',
        'Tuleap\\Statistics\\Frequencies\\GraphDataBuilder\\SessionSample' => __DIR__ . '/../..' . '/include/Frequencies/GraphDataBuilders/SessionSample.php',
        'Tuleap\\Statistics\\Frequencies\\GraphDataBuilder\\UserSample' => __DIR__ . '/../..' . '/include/Frequencies/GraphDataBuilders/UserSample.php',
        'Tuleap\\Statistics\\Frequencies\\GraphDataBuilder\\WikiSample' => __DIR__ . '/../..' . '/include/Frequencies/GraphDataBuilders/WikiSample.php',
        'Tuleap\\Statistics\\ProjectQuotaPresenter' => __DIR__ . '/../..' . '/include/ProjectQuotaPresenter.php',
        'Tuleap\\Statistics\\ProjectsOverQuotaPresenter' => __DIR__ . '/../..' . '/include/ProjectsOverQuotaPresenter.php',
        'Tuleap\\Statistics\\SCMStatisticsPresenter' => __DIR__ . '/../..' . '/include/SCMStatisticsPresenter.php',
        'Tuleap\\Statistics\\SearchFieldsPresenterBuilder' => __DIR__ . '/../..' . '/include/SearchFieldsPresenterBuilder.php',
        'Tuleap\\Statistics\\ServicesUsagePresenter' => __DIR__ . '/../..' . '/include/ServicesUsagePresenter.php',
        'Tuleap\\Statistics\\StartDateGreaterThanEndDateException' => __DIR__ . '/../..' . '/include/StartDateGreaterThanEndDateException.php',
        'Tuleap\\Statistics\\UsageProgressPresenter' => __DIR__ . '/../..' . '/include/UsageProgressPresenter.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6493fe2d27cb3db0efdb27c96a0974ed::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6493fe2d27cb3db0efdb27c96a0974ed::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6493fe2d27cb3db0efdb27c96a0974ed::$classMap;

        }, null, ClassLoader::class);
    }
}
