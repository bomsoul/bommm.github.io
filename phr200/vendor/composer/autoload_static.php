<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit17ed2e0f008136f8728e9aad7a6e4e55
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Model\\' => 6,
        ),
        'C' => 
        array (
            'Core\\' => 5,
            'Controller\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/model',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controller',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit17ed2e0f008136f8728e9aad7a6e4e55::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit17ed2e0f008136f8728e9aad7a6e4e55::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
