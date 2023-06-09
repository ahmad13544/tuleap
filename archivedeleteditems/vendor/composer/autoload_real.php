<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitf4981e8e45269da3fd24e74872fcb252
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

        spl_autoload_register(array('ComposerAutoloaderInitf4981e8e45269da3fd24e74872fcb252', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitf4981e8e45269da3fd24e74872fcb252', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitf4981e8e45269da3fd24e74872fcb252::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
