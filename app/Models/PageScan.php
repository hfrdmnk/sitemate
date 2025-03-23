<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageScan extends Model
{
    protected $fillable = [
        'url',
        'status',
        'started_at',
        'completed_at',
    ];

    protected $casts = [
        'started_at' => 'datetime',
        'completed_at' => 'datetime',
    ];

    public function report()
    {
        return $this->belongsTo(Report::class);
    }

    public function issues()
    {
        return $this->hasMany(Issue::class);
    }
}
