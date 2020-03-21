<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuardianDetail extends BaseModel
{
	protected $with = ['students'];

    protected $appends = ['fullname'];

    protected $fillable = ['created_by', 'last_updated_by', 'guardian_first_name', 'guardian_middle_name', 'guardian_last_name',
        'guardian_eligibility', 'guardian_occupation', 'guardian_office', 'guardian_office_number', 'guardian_residence_number',
        'guardian_mobile_1', 'guardian_mobile_2', 'guardian_email', 'guardian_relation', 'guardian_address','guardian_image',  'status'];

    public function getFullnameAttribute($value)
    {
        $str = $this->attributes['guardian_first_name'].' '.$this->attributes['guardian_middle_name'].' '.$this->attributes['guardian_last_name'];
        return $str ? preg_replace('/\s\s+/', ' ', $str) : null;

    }

    public function students()
    {
        return $this->belongsToMany(Student::class,'student_guardians','guardians_id','students_id','id');
        //return $this->hasMany(AcademicInfo::class, 'students_id', 'id');
    }

    /*public function guardian()
    {
        return $this->hasOne(StudentGuardian::class, 'students_id', 'id');
    }*/

    /*public function faculty()
    {
        return $this->belongsToMany(Faculty::class);
    }*/

}
