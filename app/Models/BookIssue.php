<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class BookIssue extends BaseModel
{
    protected $fillable = ['created_by', 'last_updated_by', 'member_id', 'book_id', 'issued_on', 'due_date', 'return_date', 'status'];

    protected $with = ['libMember', 'libBooks'];
    protected $appends = ['diffday'];

    public function getDiffdayAttribute()
    {
        if ($this->attributes && array_key_exists('issued_on', $this->attributes)) {
            if ($this->attributes['issued_on']) {
                return Carbon::parse($this->attributes['return_date'])->diffInDays(Carbon::parse($this->attributes['issued_on']));
            }
        }
    }

    public function libMember()
    {
        return $this->belongsTo(LibraryMember::class, 'member_id', 'id');
    }

    public function libBooks()
    {
        return $this->belongsTo(Book::class, 'book_id', 'id');
    }
}
