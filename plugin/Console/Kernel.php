<?php

namespace BalazsKirkUpdate\Console;

use BalazsKirkUpdate\WPBones\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
  protected $commands = ['BalazsKirkUpdate\Console\Commands\SampleCommand'];
}
