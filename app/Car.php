<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public $primaryKey = 'vin';
    public $incrementing = false;
}
