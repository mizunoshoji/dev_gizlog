<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DailyReport extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'title',
        'content',
        'reporting_time',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    function fetchSearchingDailyReport($inputs)
    {
        return $this->where('reporting_time', $inputs['search-date'])->orderBy('created_at', 'desc')->get();
    }
}
