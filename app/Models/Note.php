<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends BaseModel
{
    //
    protected $fillable = ['created_by', 'last_updated_by', 'member_type', 'member_id', 'subject', 'note', 'status'];

    public function staff()
    {
        return $this->belongsTo(Staff::class, 'member_id')->withDefault([
            'member_type' => 'staff'
        ]);
    }

    public function student()
    {
        return $this->belongsTo(Student::class, 'member_id')->withDefault([
            'member_type' => 'student'
        ]);
    }
}
