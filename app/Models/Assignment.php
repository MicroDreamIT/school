<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assignment extends BaseModel
{
    protected $fillable = ['created_by', 'last_updated_by', 'years_id','semesters_id','subjects_id','publish_date',
        'end_date', 'title','description','file', 'status'];

    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }

    public function semester()
    {
        return $this->belongsTo(Semester::class, 'semesters_id')->select('id','semester');
    }
    public function subject_data()
    {
        return $this->belongsTo(Subject::class, 'subjects_id')->select('id','title');
    }

    public function answers()
    {
        return $this->hasMany(AssignmentAnswer::class,'assignments_id','id');
    }

}
