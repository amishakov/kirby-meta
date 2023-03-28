<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite8b3c9ae18da895ed742916d4741d8ee
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInite8b3c9ae18da895ed742916d4741d8ee', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite8b3c9ae18da895ed742916d4741d8ee', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite8b3c9ae18da895ed742916d4741d8ee::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
