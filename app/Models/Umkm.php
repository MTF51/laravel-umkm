<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'address',
        'phone',
        'social_media',
        'operational_hours',
    ];

    public function images()
    {
        return $this->hasMany(UmkmImage::class);
    }
}
