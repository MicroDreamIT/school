<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransportHistory extends BaseModel
{
    protected $fillable = ['created_by', 'last_updated_by', 'years_id', 'routes_id', 'vehicles_id', 'travellers_id','history_type', 'status'];


    protected $appends = ['memberdetail'];

    public function getMemberdetailAttribute($value)
    {
        if($this->attributes['user_type']===1){
            $member = Student::where('id', $this->attributes['member_id'])->first();
        }
        if($this->attributes['user_type']===2){
            $member = Staff::where('id', $this->attributes['member_id'])->first();
        }

        return [$member->fullname, $member->reg_no];

    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'vehicles_id');
    }

    public function route()
    {
        return $this->belongsTo(Route::class, 'routes_id');
    }

    public function year()
    {
        return $this->belongsTo(Year::class, 'years_id');
    }
}
