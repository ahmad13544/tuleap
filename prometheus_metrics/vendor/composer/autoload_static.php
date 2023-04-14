<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9bff2820439fb0d1a3361a5e9b5ac6ec
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tuleap\\PrometheusMetrics\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tuleap\\PrometheusMetrics\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9bff2820439fb0d1a3361a5e9b5ac6ec::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9bff2820439fb0d1a3361a5e9b5ac6ec::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9bff2820439fb0d1a3361a5e9b5ac6ec::$classMap;

        }, null, ClassLoader::class);
    }
}