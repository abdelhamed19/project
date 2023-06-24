<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitde0116318f2e28a9b0e382f9a76db8ae
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

        spl_autoload_register(array('ComposerAutoloaderInitde0116318f2e28a9b0e382f9a76db8ae', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitde0116318f2e28a9b0e382f9a76db8ae', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitde0116318f2e28a9b0e382f9a76db8ae::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}