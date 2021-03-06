<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitccbcf6321bf6c6ffb7a49902a2130ce0
{
    public static $files = array (
        '7482d84076cd0c485947a689b9fee3e6' => __DIR__ . '/../..' . '/src/core/support/helper.php',
    );

    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Itrax\\Mvc\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Itrax\\Mvc\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitccbcf6321bf6c6ffb7a49902a2130ce0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitccbcf6321bf6c6ffb7a49902a2130ce0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitccbcf6321bf6c6ffb7a49902a2130ce0::$classMap;

        }, null, ClassLoader::class);
    }
}
