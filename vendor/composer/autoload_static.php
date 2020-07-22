<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitae8cc6ac90df2576c40ae4dc056a83f2
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CoffeeCode\\Router\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CoffeeCode\\Router\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/router/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitae8cc6ac90df2576c40ae4dc056a83f2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitae8cc6ac90df2576c40ae4dc056a83f2::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
