<?php

namespace BalazsKirkUpdate\Http\Controllers;

class ExampleModelController extends Controller
{
  public function index()
  {
    return BalazsKirkUpdate()
      ->view('dashboard.model')
      ->withAdminStyles('prism')
      ->withAdminScripts('prism')
      ->withAdminStyles('balazs-kirk-update-test-common');
  }
}
