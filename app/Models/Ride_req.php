<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ride_req extends Model
{
    use HasFactory;
    protected $guarded=[];


    public function carDriver()
    {
        return $this->belongsTo(User::class, 'user_id','id');
    }
    public function car_vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'vehicle_id','id');
    }
}
