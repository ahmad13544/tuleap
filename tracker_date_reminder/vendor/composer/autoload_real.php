<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit21dc84ea4b7a28323822ebec9a1a2fbb
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

        spl_autoload_register(array('ComposerAutoloaderInit21dc84ea4b7a28323822ebec9a1a2fbb', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit21dc84ea4b7a28323822ebec9a1a2fbb', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit21dc84ea4b7a28323822ebec9a1a2fbb::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}