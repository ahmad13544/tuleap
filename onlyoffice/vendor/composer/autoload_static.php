<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8e1f4923955fafa78c9976db7d6c25ce
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tuleap\\OnlyOffice\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tuleap\\OnlyOffice\\' => 
        array (
            0 => __DIR__ . '/../..' . '/include',
            1 => __DIR__ . '/../..' . '/tests/unit',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8e1f4923955fafa78c9976db7d6c25ce::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8e1f4923955fafa78c9976db7d6c25ce::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8e1f4923955fafa78c9976db7d6c25ce::$classMap;

        }, null, ClassLoader::class);
    }
}
