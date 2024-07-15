<?php

/*
|--------------------------------------------------------------------------
| Plugin updated
|--------------------------------------------------------------------------
|
| This file is included when the plugin is updated.
|
*/

//$plugin_dir = WP_PLUGIN_DIR . '/wpkirk_update_test';
$updatedFile = fopen("updated.txt", "a") or die("Unable to open file!");

$updatedTxt = "Date: ";
$updatedTxt .= date("Y-m-d H:i:s");
$updatedTxt .= " - Version: ";
$updatedTxt .= $plugin->Version;
$updatedTxt .= "\n";

fwrite($updatedFile, $updatedTxt);
fclose($updatedFile);

error_log('Kirk updated');
