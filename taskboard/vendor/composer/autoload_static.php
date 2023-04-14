<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc17168daf6950bc4fc5692a8eee433c3
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tuleap\\Taskboard\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tuleap\\Taskboard\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc17168daf6950bc4fc5692a8eee433c3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc17168daf6950bc4fc5692a8eee433c3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc17168daf6950bc4fc5692a8eee433c3::$classMap;

        }, null, ClassLoader::class);
    }
}
