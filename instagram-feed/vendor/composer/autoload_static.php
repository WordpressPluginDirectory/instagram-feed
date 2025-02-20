<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2beef32bcbe6958c8d0c584a584660fb
{
    public static $files = array (
        'sb_ig_b1eb330aa001ae4915f07005b4e993c2' => __DIR__ . '/..' . '/smashballoon/framework/Utilities/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Smashballoon\\Stubs\\' => 19,
        ),
        'I' => 
        array (
            'InstagramFeed\\Vendor\\Smashballoon\\Framework\\' => 44,
            'InstagramFeed\\Vendor\\Brumann\\Polyfill\\' => 38,
            'InstagramFeed\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Smashballoon\\Stubs\\' => 
        array (
            0 => __DIR__ . '/..' . '/smashballoon/stubs/src',
        ),
        'InstagramFeed\\Vendor\\Smashballoon\\Framework\\' => 
        array (
            0 => __DIR__ . '/..' . '/smashballoon/framework',
        ),
        'InstagramFeed\\Vendor\\Brumann\\Polyfill\\' => 
        array (
            0 => __DIR__ . '/..' . '/brumann/polyfill-unserialize/src',
        ),
        'InstagramFeed\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2beef32bcbe6958c8d0c584a584660fb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2beef32bcbe6958c8d0c584a584660fb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2beef32bcbe6958c8d0c584a584660fb::$classMap;

        }, null, ClassLoader::class);
    }
}
