<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit543d7111901f489ff9c9828a0b89bc87
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit543d7111901f489ff9c9828a0b89bc87::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit543d7111901f489ff9c9828a0b89bc87::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit543d7111901f489ff9c9828a0b89bc87::$classMap;

        }, null, ClassLoader::class);
    }
}
