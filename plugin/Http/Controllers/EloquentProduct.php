<?php

namespace BalazsKirkUpdate\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use BalazsKirkUpdate\WPBones\Database\DB;

class EloquentProduct extends Model
{
  /**
   * Disable Illuminate timestamp columns.
   *
   * @var bool
   */
  public $timestamps = false;

  /**
   * Get the table associated with the model.
   */
  public function getTable(): string
  {
    return DB::getTableName('MyPluginProducts');
  }

  /*
   * Hello
   */
}
