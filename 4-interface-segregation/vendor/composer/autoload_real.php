<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit07483f82ad0aa62c55c6e9240fc391cd
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

        spl_autoload_register(array('ComposerAutoloaderInit07483f82ad0aa62c55c6e9240fc391cd', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit07483f82ad0aa62c55c6e9240fc391cd', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit07483f82ad0aa62c55c6e9240fc391cd::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
