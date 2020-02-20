<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CertificateTemplate extends BaseModel
{
    protected $fillable = ['created_by', 'last_updated_by', 'certificate', 'template','student_photo', 'status'];
}
