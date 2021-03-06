<?php

// scoper-autoload.php @generated by PhpScoper

$loader = require_once __DIR__.'/autoload.php';

// Aliases for the whitelisted classes. For more information see:
// https://github.com/humbug/php-scoper/blob/master/README.md#class-whitelisting
if (!class_exists('ComposerAutoloaderInit9b574bf55ac4d39e4d6abf103df21eba', false) && !interface_exists('ComposerAutoloaderInit9b574bf55ac4d39e4d6abf103df21eba', false) && !trait_exists('ComposerAutoloaderInit9b574bf55ac4d39e4d6abf103df21eba', false)) {
    spl_autoload_call('DeliciousBrains\WPMDB\Container\ComposerAutoloaderInit9b574bf55ac4d39e4d6abf103df21eba');
}

// Functions whitelisting. For more information see:
// https://github.com/humbug/php-scoper/blob/master/README.md#functions-whitelisting
if (!function_exists('composerRequire9b574bf55ac4d39e4d6abf103df21eba')) {
    function composerRequire9b574bf55ac4d39e4d6abf103df21eba() {
        return \DeliciousBrains\WPMDB\Container\composerRequire9b574bf55ac4d39e4d6abf103df21eba(...func_get_args());
    }
}

return $loader;
