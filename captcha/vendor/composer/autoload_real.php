<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit2df73b8916335247fff7f12ab3d5bba9
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

        spl_autoload_register(array('ComposerAutoloaderInit2df73b8916335247fff7f12ab3d5bba9', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit2df73b8916335247fff7f12ab3d5bba9', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit2df73b8916335247fff7f12ab3d5bba9::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
