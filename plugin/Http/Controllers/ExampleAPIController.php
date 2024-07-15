<?php

namespace BalazsKirkUpdate\Http\Controllers;

class ExampleAPIController extends Controller
{
  public function index()
  {
    return BalazsKirkUpdate()
      ->view('dashboard.api')
      ->withAdminStyles('prism')
      ->withAdminScripts('prism')
      ->withAdminStyles('balazs-kirk-update-test-common');
  }
}
