<?php

/*
|--------------------------------------------------------------------------
| Plugin updated
|--------------------------------------------------------------------------
|
| This file is included when the plugin is updated.
|
*/

// Array ( [source] => D:/laragon/www/wordpress/wp-content/upgrade/wpkirk_update_test/ [source_files] => Array ( [0] => api [1] => bootstrap [2] => config [3] => database [4] => functions.php [5] => index.php [6] => LICENSE [7] => localization [8] => pages [9] => plugin [10] => pnpm-lock.yaml [11] => public [12] => readme.txt [13] => release.sh [14] => resources [15] => vendor [16] => YourPackage ) [destination] => D:\laragon\www\wordpress/wp-content/plugins/wpkirk_update_test/ [destination_name] => wpkirk_update_test [local_destination] => D:\laragon\www\wordpress/wp-content/plugins [remote_destination] => D:/laragon/www/wordpress/wp-content/plugins/wpkirk_update_test/ [clear_destination] => 1 )

$plugin_data = get_plugin_data($result['local_destination'] . '/' . $hook_extra['plugin']);
$plugin_version = $plugin_data['Version'];

$plugin_dir = $result['destination'];
$updatedFile = fopen($plugin_dir . "/updated.txt", "a") or die("Unable to open file!");

$updatedTxt = "Date: ";
$updatedTxt .= date("Y-m-d H:i:s");
$updatedTxt .= " - Version: ";
$updatedTxt .= $plugin_version;
$updatedTxt .= "\n";

fwrite($updatedFile, $updatedTxt);
fclose($updatedFile);

error_log('Kirk updated');
