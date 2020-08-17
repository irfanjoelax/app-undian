<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf5e876a42bd60d5ff403e25c1614a5cb
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf5e876a42bd60d5ff403e25c1614a5cb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf5e876a42bd60d5ff403e25c1614a5cb::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
