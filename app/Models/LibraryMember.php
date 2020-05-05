<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LibraryMember extends BaseModel
{
    protected $fillable = ['created_by', 'last_updated_by', 'user_type', 'member_id', 'status'];

    protected $appends = ['memberdetail'];

    public function getMemberdetailAttribute($value)
    {

        if(array_key_exists('member_id',$this->attributes)){
            if($this->attributes['user_type']===1){
                $member = Student::where('id', $this->attributes['member_id'])->first();
            }
            if($this->attributes['user_type']===2){
                $member = Staff::where('id', $this->attributes['member_id'])->first();
            }

            return [$member->id, $member->fullname, $member->reg_no];
        }else{
            return null;
        }


    }
    public function libCirculation()
    {
        return $this->belongsTo(LibraryCirculation::class, 'user_type','id');
    }

    public function libBookIssue()
    {
        return $this->hasMany(BookIssue::class, 'member_id');
    }

    public function bookRequest()
    {
        return $this->belongsTo(BookRequest::class, 'member_id','id');
    }
}
