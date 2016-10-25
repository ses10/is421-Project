<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    public function user()
    {
    	return $this->belongsTo('App\User', 'username', 'username');
    }

    public function car()
    {
    	return $this->belongsTo('App\Car', 'vin', 'vin');
    }
}
