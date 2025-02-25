<?php

return [
  /*
  |--------------------------------------------------------------------------
  | Logging Configuration
  |--------------------------------------------------------------------------
  |
  | Here you may configure the log settings for your plugin.
  |
  | Available Settings: "single", "daily", "errorlog".
  |
  | Set to false or 'none' to stop logging.
  |
  */

  'log' => 'errorlog',

  'log_level' => 'debug',

  /*
  |--------------------------------------------------------------------------
  | Screen options
  |--------------------------------------------------------------------------
  |
  | Here is where you can register the screen options for List Table.
  |
  */

  'screen_options' => [],

  /*
  |--------------------------------------------------------------------------
  | Custom Post Types
  |--------------------------------------------------------------------------
  |
  | Here is where you can register the Custom Post Types.
  |
  */

  'custom_post_types' => ['\BalazsKirkUpdate\CustomPostTypes\MyCustomPostType'],

  /*
  |--------------------------------------------------------------------------
  | Custom Taxonomies
  |--------------------------------------------------------------------------
  |
  | Here is where you can register the Custom Taxonomy Types.
  |
  */

  'custom_taxonomy_types' => ['\BalazsKirkUpdate\CustomTaxonomyTypes\MyCustomTaxonomy'],

  /*
  |--------------------------------------------------------------------------
  | Shortcodes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register the Shortcodes.
  |
  */

  'shortcodes' => ['\BalazsKirkUpdate\Shortcodes\MyShortcodes'],

  /*
  |--------------------------------------------------------------------------
  | Widgets
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all the Widget for a plugin.
  |
  */

  'widgets' => ['\BalazsKirkUpdate\Widgets\MyWidget'],

  /*
  |--------------------------------------------------------------------------
  | Ajax
  |--------------------------------------------------------------------------
  |
  | Here is where you can register your own Ajax actions.
  |
  */

  'ajax' => ['\BalazsKirkUpdate\Ajax\MyAjax'],

  /*
  |--------------------------------------------------------------------------
  | Autoloader Service Providers
  |--------------------------------------------------------------------------
  |
  | The service providers listed here will be automatically loaded on the
  | init to your plugin. Feel free to add your own services to
  | this array to grant expanded functionality to your applications.
  |
  */

  'providers' => [],
];
