<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    public $table = "recipes";
    //public $timestamps = false;
    public $primaryKey = 'id';
    //public $guarded = [];
}
