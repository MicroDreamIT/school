<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Semester extends BaseModel
{
    protected $fillable = ['created_by', 'last_updated_by', 'semester', 'slug', 'staff_id', 'gradingType_id', 'status'];


    public function faculty()
    {
        return $this->belongsToMany(Faculty::class);
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }
    public function staff()
    {
        return $this->hasOne(Staff::class,'id','staff_id')->select('id','first_name','middle_name','last_name');
    }

    public function gradingType()
    {
        return $this->hasOne(GradingType::class, 'id','gradingType_id')->select('id','title');
    }

    public function downloads()
    {
        return $this->hasMany(Download::class,'semesters_id','id');
    }
}
