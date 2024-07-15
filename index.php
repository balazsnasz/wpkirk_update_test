<?php

/**
 * Plugin Name: Balazs Kirk Update Test
 * Plugin URI: https://github.com/wpbones/BalazsKirkUpdate
 * Description: WP Bones template WordPress plugin
 * Version: 2.0
 * Author: Giovambattista Fazioli
 * Author URI: http://undolog.com
 * Text Domain: balazs-kirk-update-test
 * Domain Path: localization
 * GitHub Plugin URI: https://github.com/balazsnasz/wpkirk_update_test
 * Primary Branch: main
 *
 */

if (!defined('ABSPATH')) {
    exit();
}

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels nice to relax.
|
*/

require_once __DIR__ . '/bootstrap/autoload.php';
