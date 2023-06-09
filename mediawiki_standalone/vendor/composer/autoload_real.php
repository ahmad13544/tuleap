<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit9d4ef6e5e25ada17626ad88f4b280fa9
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

        spl_autoload_register(array('ComposerAutoloaderInit9d4ef6e5e25ada17626ad88f4b280fa9', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit9d4ef6e5e25ada17626ad88f4b280fa9', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit9d4ef6e5e25ada17626ad88f4b280fa9::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
