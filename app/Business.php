<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function locations()
    {
        return $this->belongsTo('App\Location');
    }
}
