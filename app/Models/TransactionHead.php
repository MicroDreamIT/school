<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionHead extends BaseModel
{
    protected $fillable = ['created_by', 'last_updated_by', 'tr_head', 'acc_id', 'status'];

    public function account_category()
    {
        return $this->belongsTo(AccountCategory::class, 'acc_id');
    }
    public function tR()
    {
        return $this->hasMany(Transaction::class, 'tr_head_id');
    }
}
