<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitba953f90043d6dd8b0811ad87c2b9208
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

        spl_autoload_register(array('ComposerAutoloaderInitba953f90043d6dd8b0811ad87c2b9208', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitba953f90043d6dd8b0811ad87c2b9208', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitba953f90043d6dd8b0811ad87c2b9208::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
