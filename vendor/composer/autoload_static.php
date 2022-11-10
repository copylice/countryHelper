<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7de0e0cc7d9c461788b3acfd2c7ba0b7
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\interfaces\\' => 15,
            'app\\classes\\supportedCountries\\' => 31,
            'app\\abstractClasses\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\interfaces\\' => 
        array (
            0 => __DIR__ . '/../..' . '/interfaces',
        ),
        'app\\classes\\supportedCountries\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes/supportedСountries',
        ),
        'app\\abstractClasses\\' => 
        array (
            0 => __DIR__ . '/../..' . '/abstractClasses',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7de0e0cc7d9c461788b3acfd2c7ba0b7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7de0e0cc7d9c461788b3acfd2c7ba0b7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7de0e0cc7d9c461788b3acfd2c7ba0b7::$classMap;

        }, null, ClassLoader::class);
    }
}