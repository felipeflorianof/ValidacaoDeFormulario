<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitd7ed78255d115b6f82bbe1248ff10255
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

        spl_autoload_register(array('ComposerAutoloaderInitd7ed78255d115b6f82bbe1248ff10255', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitd7ed78255d115b6f82bbe1248ff10255', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitd7ed78255d115b6f82bbe1248ff10255::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
