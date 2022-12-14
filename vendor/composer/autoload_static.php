<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8452408b8e2cd9d578068eb4f57902b6
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8452408b8e2cd9d578068eb4f57902b6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8452408b8e2cd9d578068eb4f57902b6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8452408b8e2cd9d578068eb4f57902b6::$classMap;

        }, null, ClassLoader::class);
    }
}
