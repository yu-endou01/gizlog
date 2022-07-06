<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DailyReport extends Model
{
    use SoftDeletes;

    protected $perPage = 10;

    protected $fillable = [
        'reporting_time',
        'content',
        'title',
    ];

    protected $dates = [
        'reporting_time'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
