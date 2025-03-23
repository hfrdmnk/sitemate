<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    protected $fillable = [
        'module',
        'type',
        'severity',
        'data',
    ];

    protected $casts = [
        'data' => 'array',
    ];

    public function pageScan()
    {
        return $this->belongsTo(PageScan::class);
    }
}
