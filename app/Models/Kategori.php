<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategoris';

    protected $fillable = [
        'nama',
        'slug',
        'icon',
    ];

    public function artikels()
    {
        return $this->hasMany(Artikel::class, 'kategori_id');
    }
}
