<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    protected $fillable = ['name']; // Menentukan kolom yang dapat diisi secara massal

    /**
     * Relationship with logs
     */
    public function logs()
    {
        return $this->hasMany(Log::class);
    }
}
