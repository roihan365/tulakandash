<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd6ee7496de3a68b2649b68e4b029fcd6
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Roihan365\\Tulakandashboard\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Roihan365\\Tulakandashboard\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd6ee7496de3a68b2649b68e4b029fcd6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd6ee7496de3a68b2649b68e4b029fcd6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd6ee7496de3a68b2649b68e4b029fcd6::$classMap;

        }, null, ClassLoader::class);
    }
}
