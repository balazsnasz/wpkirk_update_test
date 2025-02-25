<?php

namespace BalazsKirkUpdate\WPBones\Contracts\Foundation;

use BalazsKirkUpdate\WPBones\Contracts\Container\Container;

interface Plugin extends Container
{
  /**
   * Get the base path of the Plugin installation.
   *
   * @return string
   */
  public function getBasePath(): string;
}
