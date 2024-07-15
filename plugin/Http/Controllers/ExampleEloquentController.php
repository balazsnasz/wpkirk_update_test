<?php

namespace BalazsKirkUpdate\Http\Controllers;

class ExampleEloquentController extends Controller
{
  public function index()
  {
    return BalazsKirkUpdate()
      ->view('dashboard.eloquent')
      ->withAdminStyles('prism')
      ->withAdminScripts('prism')
      ->withAdminStyles('balazs-kirk-update-test-common');
  }
}
