<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sitting extends Model
{
      protected $table="sittings";

    protected $fillable=[
    	'slug', 'namesetting', 'value','type',	
    ];
}
