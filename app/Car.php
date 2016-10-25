<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public $primaryKey = 'vin';
    public $incrementing = false;

    public function user()
    {
        return $this->belongsTo('App\User', 'username', 'username');
    }
}
