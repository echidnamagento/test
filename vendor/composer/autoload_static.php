<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0174606b974637d5e89ff211b8e04575
{
    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Test' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit0174606b974637d5e89ff211b8e04575::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
