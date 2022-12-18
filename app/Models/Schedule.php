<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $table = 'schedule';

    protected $fillable = [
        'name',
        'comment',
        'book_date',
        'from_time',
        'to_time',
        'user_id',
        'field_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
