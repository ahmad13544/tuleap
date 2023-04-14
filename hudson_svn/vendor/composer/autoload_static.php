<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0bc87dabf7f22ffd017396c6b3ac7971
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tuleap\\HudsonSvn\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tuleap\\HudsonSvn\\' => 
        array (
            0 => __DIR__ . '/../..' . '/include',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Tuleap\\HudsonSvn\\BuildParams' => __DIR__ . '/../..' . '/include/BuildParams.php',
        'Tuleap\\HudsonSvn\\ContinuousIntegrationCollector' => __DIR__ . '/../..' . '/include/ContinuousIntegrationCollector.php',
        'Tuleap\\HudsonSvn\\FormPresenter' => __DIR__ . '/../..' . '/include/FormPresenter.php',
        'Tuleap\\HudsonSvn\\Job\\Dao' => __DIR__ . '/../..' . '/include/Job/Dao.php',
        'Tuleap\\HudsonSvn\\Job\\Factory' => __DIR__ . '/../..' . '/include/Job/Factory.php',
        'Tuleap\\HudsonSvn\\Job\\Job' => __DIR__ . '/../..' . '/include/Job/Job.php',
        'Tuleap\\HudsonSvn\\Job\\Launcher' => __DIR__ . '/../..' . '/include/Job/Launcher.php',
        'Tuleap\\HudsonSvn\\Job\\Manager' => __DIR__ . '/../..' . '/include/Job/Manager.php',
        'Tuleap\\HudsonSvn\\Plugin\\HudsonSvnPluginDescriptor' => __DIR__ . '/../..' . '/include/HudsonSvnPluginDescriptor.php',
        'Tuleap\\HudsonSvn\\Plugin\\HudsonSvnPluginInfo' => __DIR__ . '/../..' . '/include/HudsonSvnPluginInfo.php',
        'hudson_svnPlugin' => __DIR__ . '/../..' . '/include/hudson_svnPlugin.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0bc87dabf7f22ffd017396c6b3ac7971::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0bc87dabf7f22ffd017396c6b3ac7971::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0bc87dabf7f22ffd017396c6b3ac7971::$classMap;

        }, null, ClassLoader::class);
    }
}
