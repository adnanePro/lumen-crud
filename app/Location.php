<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends BaseModel
{
    public $table ="location";

    public static  $rules = ['lat','long'];

    protected $fillable = [
        'lat', 'long',
    ];
}
