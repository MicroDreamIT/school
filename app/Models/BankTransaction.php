<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BankTransaction extends BaseModel
{
    protected $fillable = ['created_by', 'last_updated_by', 'banks_id', 'description','deposit_id','date','dr_amt','cr_amt','amount', 'status'];

    public function banks()
    {
        return $this->belongsTo(Bank::class, 'banks_id');
    }
}
