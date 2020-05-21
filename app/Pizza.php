<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    // protected $table = 'some_name'; 

    //convert array to json and vice
    protected $casts = [
        'toppings' => 'array'
    ];
}
