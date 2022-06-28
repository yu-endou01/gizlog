<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DailyReport extends Model
{
    protected $fillable = [
        'reporting_time',
        'content',
        'title',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
