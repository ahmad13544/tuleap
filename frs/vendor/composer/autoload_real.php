<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit61a3fa0b6cfdda9e033369b0fe3e867c
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

        spl_autoload_register(array('ComposerAutoloaderInit61a3fa0b6cfdda9e033369b0fe3e867c', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit61a3fa0b6cfdda9e033369b0fe3e867c', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit61a3fa0b6cfdda9e033369b0fe3e867c::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
