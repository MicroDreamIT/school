<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends BaseModel
{
    //
    protected $fillable = ['created_by', 'last_updated_by', 'member_type', 'member_id',  'title', 'file','description', 'status'];

    protected $appends = ['staffregno'];

    public function getStaffregnoAttribute($value)
    {

        if(array_key_exists('member_type', $this->attributes) && $this->attributes['member_type']==='staff'){
            return Staff::where('id', $this->attributes['member_id'])->first()->reg_no;
        }
        return null;
    }

}
