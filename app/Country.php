<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function orders()
    {
        return $this->hasMany('App\Order');
    }

    public function addresses()
    {
        return $this->hasMany('App\Address');
    }

    public function cities()
    {
        return $this->hasMany('App\City');
    }
}
