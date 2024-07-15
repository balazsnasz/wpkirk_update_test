<?php

namespace BalazsKirkUpdate\Http\Controllers;

class ReactApplicationController extends Controller
{
  public function index()
  {
    return BalazsKirkUpdate()->view('dashboard.react-app')->withAdminAppsScripts('app');
  }

  public function reactSettings()
  {
    return BalazsKirkUpdate()
      ->view('dashboard.react-app')
      ->withAdminAppsScripts('app', true, 'ReactApp', [
        'tab' => 'settings',
      ]);
  }
}
