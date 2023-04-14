<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInita73aefe23d66ffbad971ad628c7e9c20
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInita73aefe23d66ffbad971ad628c7e9c20', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInita73aefe23d66ffbad971ad628c7e9c20', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInita73aefe23d66ffbad971ad628c7e9c20::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}