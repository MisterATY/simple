<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbce8e55e4f752430b0cdf359622fb5d3
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Aty\\Simple\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Aty\\Simple\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitbce8e55e4f752430b0cdf359622fb5d3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbce8e55e4f752430b0cdf359622fb5d3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbce8e55e4f752430b0cdf359622fb5d3::$classMap;

        }, null, ClassLoader::class);
    }
}
