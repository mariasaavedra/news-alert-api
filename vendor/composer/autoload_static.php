<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit17ff9d578c741ac63d87a761d6203e35
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '72579e7bd17821bb1321b87411366eae' => __DIR__ . '/..' . '/illuminate/support/helpers.php',
        'c65d09b6820da036953a371c8c73a9b1' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/polyfills.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Yaml\\' => 23,
            'Symfony\\Component\\Translation\\' => 30,
            'Symfony\\Component\\Process\\' => 26,
            'Symfony\\Component\\HttpKernel\\' => 29,
            'Symfony\\Component\\HttpFoundation\\' => 33,
            'Symfony\\Component\\EventDispatcher\\' => 34,
            'Symfony\\Component\\Debug\\' => 24,
            'Symfony\\Component\\Console\\' => 26,
        ),
        'P' => 
        array (
            'Psr\\SimpleCache\\' => 16,
            'Psr\\Log\\' => 8,
            'Psr\\Container\\' => 14,
        ),
        'L' => 
        array (
            'Laravel\\Homestead\\' => 18,
        ),
        'I' => 
        array (
            'Illuminate\\Support\\' => 19,
            'Illuminate\\Contracts\\' => 21,
        ),
        'F' => 
        array (
            'Facebook\\' => 9,
        ),
        'D' => 
        array (
            'Doctrine\\Common\\Inflector\\' => 26,
        ),
        'C' => 
        array (
            'Carbon\\' => 7,
        ),
        'B' => 
        array (
            'Barryvdh\\Cors\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Yaml\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/yaml',
        ),
        'Symfony\\Component\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation',
        ),
        'Symfony\\Component\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/process',
        ),
        'Symfony\\Component\\HttpKernel\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/http-kernel',
        ),
        'Symfony\\Component\\HttpFoundation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/http-foundation',
        ),
        'Symfony\\Component\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/event-dispatcher',
        ),
        'Symfony\\Component\\Debug\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/debug',
        ),
        'Symfony\\Component\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/console',
        ),
        'Psr\\SimpleCache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/simple-cache/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Laravel\\Homestead\\' => 
        array (
            0 => __DIR__ . '/..' . '/laravel/homestead/src',
        ),
        'Illuminate\\Support\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/support',
        ),
        'Illuminate\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/contracts',
        ),
        'Facebook\\' => 
        array (
            0 => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook',
        ),
        'Doctrine\\Common\\Inflector\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/inflector/lib/Doctrine/Common/Inflector',
        ),
        'Carbon\\' => 
        array (
            0 => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon',
        ),
        'Barryvdh\\Cors\\' => 
        array (
            0 => __DIR__ . '/..' . '/barryvdh/laravel-cors/src',
        ),
    );

    public static $classMap = array (
        'CorsKernel' => __DIR__ . '/..' . '/barryvdh/laravel-cors/tests/CorsKernel.php',
        'CorsServiceTest' => __DIR__ . '/..' . '/barryvdh/laravel-cors/tests/CorsServiceTest.php',
        'GlobalMiddlewareTest' => __DIR__ . '/..' . '/barryvdh/laravel-cors/tests/GlobalMiddlewareTest.php',
        'GroupMiddlewareTest' => __DIR__ . '/..' . '/barryvdh/laravel-cors/tests/GroupMiddlewareTest.php',
        'MockApp' => __DIR__ . '/..' . '/barryvdh/laravel-cors/tests/CorsServiceTest.php',
        'OriginMatcherTest' => __DIR__ . '/..' . '/barryvdh/laravel-cors/tests/OriginMatcherTest.php',
        'PreflightTest' => __DIR__ . '/..' . '/barryvdh/laravel-cors/tests/PreflightTest.php',
        'TestCase' => __DIR__ . '/..' . '/barryvdh/laravel-cors/tests/TestCase.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit17ff9d578c741ac63d87a761d6203e35::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit17ff9d578c741ac63d87a761d6203e35::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit17ff9d578c741ac63d87a761d6203e35::$classMap;

        }, null, ClassLoader::class);
    }
}
