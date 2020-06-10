<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2fae5b1c4c0e4257bb571f6cd6539887
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Acme\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Acme\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2fae5b1c4c0e4257bb571f6cd6539887::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2fae5b1c4c0e4257bb571f6cd6539887::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
