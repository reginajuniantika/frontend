<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    protected $fillable = [
        'device_id',
        'log_time',
        'log_data',
    ];

    public function device()
    {
        return $this->belongsTo(Device::class);
    }
}
