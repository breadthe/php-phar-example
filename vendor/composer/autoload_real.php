<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit8452408b8e2cd9d578068eb4f57902b6
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

        spl_autoload_register(array('ComposerAutoloaderInit8452408b8e2cd9d578068eb4f57902b6', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit8452408b8e2cd9d578068eb4f57902b6', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit8452408b8e2cd9d578068eb4f57902b6::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
