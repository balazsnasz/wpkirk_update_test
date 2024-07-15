<?php

namespace BalazsKirkUpdate\Http\Controllers;

class AssetsController extends Controller
{
  public function index()
  {
    return BalazsKirkUpdate()
      ->view('dashboard.assets')
      ->withAdminStyles('balazs-kirk-update-test-common')
      ->withAdminStyles('prism')
      ->withAdminScripts('prism')
      ->withAdminScripts('wp-react-component', ['wp-element']);
  }
}
