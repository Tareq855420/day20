<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2b33cf5107d3abefd27ee5991940d975
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2b33cf5107d3abefd27ee5991940d975::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2b33cf5107d3abefd27ee5991940d975::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2b33cf5107d3abefd27ee5991940d975::$classMap;

        }, null, ClassLoader::class);
    }
}
