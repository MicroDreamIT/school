<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends BaseModel
{
    protected $fillable = ['created_by', 'last_updated_by', 'number', 'type', 'model', 'description', 'status'];

    protected $appends = ['fullname'];

    public function getFullnameAttribute($value)
    {
        $str = $this->attributes['number'].'|'.$this->attributes['model'].'|'.$this->attributes['type'];
        return $str ? preg_replace('/\s\s+/', ' ', $str) : null;

    }

    public function staff(){
        return $this->belongsToMany(Staff::class, 'vehicle_staffs', 'vehicles_id', 'staffs_id');
    }

    public function route(){
        return $this->belongsToMany(Vehicle::class, 'route_vehicles', 'vehicles_id', 'routes_id');
    }
}
