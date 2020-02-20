<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends BaseModel
{
    protected $fillable = ['created_by', 'last_updated_by', 'institute', 'salogan','copyright', 'address','phone','email','website', 'favicon', 'email', 'logo',
        'print_header', 'print_footer', 'facebook', 'twitter', 'linkedIn', 'youtube', 'googlePlus',
        'instagram', 'whatsApp', 'skype', 'pinterest','wordpress', 'time_zones_id','public_registration','status'];
}
