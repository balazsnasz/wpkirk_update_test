<?php

namespace BalazsKirkUpdate\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use BalazsKirkUpdate\WPBones\Database\DB;

class EloquentUser extends Model
{
  /**
   * The primary key for the model.
   *
   * @var string
   */
  protected $primaryKey = 'ID';

  /**
   * Get the table associated with the model.
   *
   * @return string
   */
  public function getTable(): string
  {
    return DB::getTableName('Users');
  }
}
