<?php

namespace BalazsKirkUpdate\Http\Controllers;

class ExampleDatabaseController extends Controller
{
  public function index()
  {
    return BalazsKirkUpdate()
      ->view('dashboard.database')
      ->withAdminStyles('prism')
      ->withAdminScripts('prism')
      ->withAdminStyles('balazs-kirk-update-test-common');
  }
}
