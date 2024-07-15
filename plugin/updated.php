<?php

/*
|--------------------------------------------------------------------------
| Plugin updated
|--------------------------------------------------------------------------
|
| This file is included when the plugin is updated.
|
*/

$plugin_data = get_plugin_data($hook_extra['plugin']);
$plugin_version = $plugin_data['Version'];

$plugin_dir = plugin_dir_path($hook_extra['plugin']);
$updatedFile = fopen($plugin_dir . "/updated.txt", "a") or die("Unable to open file!");

$updatedTxt = "Date: ";
$updatedTxt .= date("Y-m-d H:i:s");
$updatedTxt .= " - Version: ";
$updatedTxt .= $plugin_version;
$updatedTxt .= "\n";

fwrite($updatedFile, $updatedTxt);
fclose($updatedFile);

error_log('Kirk updated');
