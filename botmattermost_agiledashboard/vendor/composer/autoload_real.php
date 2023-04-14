<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit0ec74b54485f3e2da280cc5048ea3529
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

        spl_autoload_register(array('ComposerAutoloaderInit0ec74b54485f3e2da280cc5048ea3529', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit0ec74b54485f3e2da280cc5048ea3529', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit0ec74b54485f3e2da280cc5048ea3529::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}