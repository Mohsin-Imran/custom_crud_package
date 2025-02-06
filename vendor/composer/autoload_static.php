<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbe1aad1bfdb3b23eae8fca27a40c6576
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MohsinCrud\\Crud\\Tests\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MohsinCrud\\Crud\\Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbe1aad1bfdb3b23eae8fca27a40c6576::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbe1aad1bfdb3b23eae8fca27a40c6576::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbe1aad1bfdb3b23eae8fca27a40c6576::$classMap;

        }, null, ClassLoader::class);
    }
}
