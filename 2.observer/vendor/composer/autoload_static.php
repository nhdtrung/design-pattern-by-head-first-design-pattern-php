<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2452f4b4a0dc40df702999055676da76
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'HeadFirst\\Observer\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'HeadFirst\\Observer\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2452f4b4a0dc40df702999055676da76::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2452f4b4a0dc40df702999055676da76::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2452f4b4a0dc40df702999055676da76::$classMap;

        }, null, ClassLoader::class);
    }
}
