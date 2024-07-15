<?php

namespace BalazsKirkUpdate\Http\Controllers\Dashboard;

use BalazsKirkUpdate\Http\Controllers\Controller;
use BalazsKirkUpdate\PureCSSTabs\PureCSSTabsProvider;
use BalazsKirkUpdate\PureCSSSwitch\PureCSSSwitchProvider;
use BalazsKirkUpdate\WPBones\Foundation\Log\Log;

class DashboardController extends Controller
{
  public function firstMenu()
  {
    Log::debug('Log::debug sample');
    Log::info('Log::info sample');
    Log::notice('Log::notice sample');
    Log::warning('Log::warning sample');
    Log::error('Log::error sample');
    Log::critical('Log::critical sample');
    Log::alert('Log::alert sample');
    Log::emergency('Log::emergency sample');

    return BalazsKirkUpdate()
      ->view('dashboard.index')
      ->withAdminStyles('balazs-kirk-update-test-common')
      ->withAdminStyles('prism')
      ->withAdminScripts('prism')
      ->with('kirk', 'Captain');
  }

  public function secondMenu()
  {
    return BalazsKirkUpdate()->view('dashboard.second')->withAdminStyles('balazs-kirk-update-test-common')->withAdminScripts('balazs-kirk-update-test-main');
  }

  public function optionsMenu()
  {
    return BalazsKirkUpdate()
      ->view('dashboard.options')
      ->withAdminStyles('prism')
      ->withAdminScripts('prism')
      ->withAdminStyles('balazs-kirk-update-test-common');
  }

  public function optionsView()
  {
    return BalazsKirkUpdate()
      ->view('dashboard.optionsview')
      ->withAdminStyles('prism')
      ->withAdminScripts('prism')
      ->withAdminStyles('balazs-kirk-update-test-common');
  }

  public function html()
  {
    return BalazsKirkUpdate()
      ->view('dashboard.html')
      ->withAdminStyles('balazs-kirk-update-test-common')
      ->withAdminStyles('prism')
      ->withAdminScripts('prism')
      ->withAdminStyles('balazs-kirk-update-test-dashboard');
  }

  public function package()
  {
    PureCSSTabsProvider::enqueueStyles();

    PureCSSSwitchProvider::enqueueStyles();

    return BalazsKirkUpdate()
      ->view('dashboard.package')
      ->withAdminStyles('balazs-kirk-update-test-common')
      ->withAdminStyles('prism')
      ->withAdminScripts('prism');
  }

  public function packagePost()
  {
    PureCSSTabsProvider::enqueueStyles();

    PureCSSSwitchProvider::enqueueStyles();

    return BalazsKirkUpdate()->view('dashboard.package')->withAdminStyles('balazs-kirk-update-test-common');
  }

  public function saveOptions()
  {
    if ($this->request->verifyNonce('Options')) {
      BalazsKirkUpdate()->options->update($this->request->getAsOptions());

      return BalazsKirkUpdate()
        ->view('dashboard.optionsview')
        ->withAdminStyles('balazs-kirk-update-test-common')
        ->withAdminStyles('prism')
        ->withAdminScripts('prism')
        ->with('feedback', 'Options updated!');
    } else {
      return BalazsKirkUpdate()
        ->view('dashboard.optionsview')
        ->withAdminStyles('balazs-kirk-update-test-common')
        ->withAdminStyles('prism')
        ->withAdminScripts('prism')
        ->with('feedback', 'Action Not Allowed!');
    }
  }

  public function customPage()
  {
    return BalazsKirkUpdate()
      ->view('dashboard.first_custom_page')
      ->withAdminStyles('balazs-kirk-update-test-common')
      ->withAdminStyles('prism')
      ->withAdminScripts('prism')
      ->with('method', $this->request->method);
  }

  public function secondCustomPage()
  {
    return BalazsKirkUpdate()
      ->view('dashboard.second_custom_page')
      ->withAdminStyles('balazs-kirk-update-test-common')
      ->withAdminStyles('prism')
      ->withAdminScripts('prism')
      ->with('method', $this->request->method);
  }
}
