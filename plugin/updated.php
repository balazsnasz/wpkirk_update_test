<?php

/*
|--------------------------------------------------------------------------
| Plugin updated
|--------------------------------------------------------------------------
|
| This file is included when the plugin is updated.
|
*/

$updatedFile = fopen("updated.txt", "a") or die("Unable to open file!");

$updatedTxt = "Date: ";
$updatedTxt .= date("Y-m-d H:i:s");
$updatedTxt .= " - Version: ";
$updatedTxt .= $plugin->Version;
$updatedTxt .= "\n";

fwrite($updatedFile, $updatedTxt);
fclose($updatedFile);