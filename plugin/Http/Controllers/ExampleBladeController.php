<?php

namespace BalazsKirkUpdate\Http\Controllers;

use BalazsKirkUpdate\Http\Controllers\EloquentUser as User;

class ExampleBladeController extends Controller
{
  public function index()
  {

    $controller = <<<'EOT'
    <?php
    namespace BalazsKirkUpdate\Http\Controllers;

    use BalazsKirkUpdate\Http\Controllers\EloquentUser as User;

    class ExampleBladeController extends Controller
    {
        public function index()
        {
            return BalazsKirkUpdate()
              ->view('blade.demo', ['users' => User::all()])
              ->withAdminStyles('prism')
              ->withAdminScripts('prism')
              ->withAdminStyles('balazs-kirk-update-test-common');
        }
    }
    EOT;

    $code = '@foreach ($users as $user)
      <p>user_nicename: {{ $user->user_nicename }}</p>
      <p>user_email: {{ $user->user_email }}</p>
 @endforeach';


    return BalazsKirkUpdate()
      ->view('blade.demo', ['users' => User::all(), 'code' => $code, 'controller' => $controller])
      ->withAdminStyles('prism')
      ->withAdminScripts('prism')
      ->withAdminStyles('balazs-kirk-update-test-common');
  }
}
