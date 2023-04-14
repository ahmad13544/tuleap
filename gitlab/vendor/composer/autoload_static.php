<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit23f3ba63d58b7247ca1645153b648d03
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tuleap\\Gitlab\\Test\\' => 19,
            'Tuleap\\Gitlab\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tuleap\\Gitlab\\Test\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests/unit/Test',
        ),
        'Tuleap\\Gitlab\\' => 
        array (
            0 => __DIR__ . '/../..' . '/include',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit23f3ba63d58b7247ca1645153b648d03::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit23f3ba63d58b7247ca1645153b648d03::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit23f3ba63d58b7247ca1645153b648d03::$classMap;

        }, null, ClassLoader::class);
    }
}
