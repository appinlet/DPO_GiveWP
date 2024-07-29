<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5f3c9633b5b6b6d1556e05448e6daf09
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dpo\\Give\\' => 9,
            'Dpo\\Common\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dpo\\Give\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Dpo\\Common\\' => 
        array (
            0 => __DIR__ . '/..' . '/dpo/dpo-pay-common/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5f3c9633b5b6b6d1556e05448e6daf09::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5f3c9633b5b6b6d1556e05448e6daf09::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5f3c9633b5b6b6d1556e05448e6daf09::$classMap;

        }, null, ClassLoader::class);
    }
}
