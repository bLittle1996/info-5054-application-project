<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleStat extends Model
{
    public function vehicle() {
      return $this->belongsTo('App\Vehicle');
    }
}
