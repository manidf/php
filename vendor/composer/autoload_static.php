<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit85920d1d1c015cdbc5eaa721beadf07c
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit85920d1d1c015cdbc5eaa721beadf07c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit85920d1d1c015cdbc5eaa721beadf07c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
