<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit096e416a337f643b6b83b7debcc0cd25
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Arafat\\MyTestPhpProject\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Arafat\\MyTestPhpProject\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit096e416a337f643b6b83b7debcc0cd25::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit096e416a337f643b6b83b7debcc0cd25::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit096e416a337f643b6b83b7debcc0cd25::$classMap;

        }, null, ClassLoader::class);
    }
}
