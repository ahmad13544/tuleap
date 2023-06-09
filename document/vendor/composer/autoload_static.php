<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita73e6c0c59f91d18a2ffd1b7a9a9ed82
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'ZipStream\\' => 10,
        ),
        'T' => 
        array (
            'Tuleap\\Document\\Tests\\' => 22,
            'Tuleap\\Document\\' => 16,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'M' => 
        array (
            'MyCLabs\\Enum\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ZipStream\\' => 
        array (
            0 => __DIR__ . '/..' . '/maennchen/zipstream-php/src',
        ),
        'Tuleap\\Document\\Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests/unit',
        ),
        'Tuleap\\Document\\' => 
        array (
            0 => __DIR__ . '/../..' . '/include',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'MyCLabs\\Enum\\' => 
        array (
            0 => __DIR__ . '/..' . '/myclabs/php-enum/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Stringable' => __DIR__ . '/..' . '/myclabs/php-enum/stubs/Stringable.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita73e6c0c59f91d18a2ffd1b7a9a9ed82::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita73e6c0c59f91d18a2ffd1b7a9a9ed82::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita73e6c0c59f91d18a2ffd1b7a9a9ed82::$classMap;

        }, null, ClassLoader::class);
    }
}
