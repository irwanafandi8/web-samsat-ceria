<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillable = [
        'judul',
        'slug',
        'sumber',
        'gambar',
        'deskripsi',
        'datetime',
    ];

    protected $casts = [
        'datetime' => 'datetime',
        'deskripsi' => 'array',
    ];
}
