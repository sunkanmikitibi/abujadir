<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function businesses()
    {
        return $this->hasMany('App\Business');
    }
}
