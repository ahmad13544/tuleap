<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitafcad02fc7635e90eebcf2ba24aa0599
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tuleap\\Label\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tuleap\\Label\\' => 
        array (
            0 => __DIR__ . '/../..' . '/include/Label',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitafcad02fc7635e90eebcf2ba24aa0599::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitafcad02fc7635e90eebcf2ba24aa0599::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitafcad02fc7635e90eebcf2ba24aa0599::$classMap;

        }, null, ClassLoader::class);
    }
}
