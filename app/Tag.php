<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
  public $table = "tags";
  //public $timestamps = false;
  public $primaryKey = 'id';
  //public $guarded = [];
}
