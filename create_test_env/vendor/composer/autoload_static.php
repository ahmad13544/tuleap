<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita73aefe23d66ffbad971ad628c7e9c20
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tuleap\\CreateTestEnv\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tuleap\\CreateTestEnv\\' => 
        array (
            0 => __DIR__ . '/../..' . '/include/CreateTestEnv',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita73aefe23d66ffbad971ad628c7e9c20::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita73aefe23d66ffbad971ad628c7e9c20::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita73aefe23d66ffbad971ad628c7e9c20::$classMap;

        }, null, ClassLoader::class);
    }
}
