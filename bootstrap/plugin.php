<?php

if (! defined('ABSPATH')) {
    exit;
}

/*
|--------------------------------------------------------------------------
| Create The Plugin
|--------------------------------------------------------------------------
|
| The first thing we will do is create a new Bones plugin instance
| which serves as the "glue" for all the components.
|
*/
if (class_exists('\BalazsKirkUpdate\WPBones\Foundation\Plugin')) {
    $plugin = new \BalazsKirkUpdate\WPBones\Foundation\Plugin(
        realpath(__DIR__ . '/../')
    );

    /*
    |--------------------------------------------------------------------------
    | Return The Plugin
    |--------------------------------------------------------------------------
    |
    | This script returns the plugin instance. The instance is given to
    | the calling script so we can separate the building of the instances
    | from the actual running of the application and sending responses.
    |
    */

    /**
     * Fire when the plugin is loaded
     */
    do_action('balazs-kirk-update-test_loaded');

    return $plugin;
}
