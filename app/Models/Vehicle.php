<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function driver(){

        return $this->belongsTo(User::class,'user_id','id');
    }

    public function car_route(){

        return $this->belongsToMany(Route::class, 'route_vehicle');
    }

}
