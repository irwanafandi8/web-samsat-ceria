<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $kategoris = [
            [
                'nama' => 'Pajak Kendaraan',
                'slug' => 'pajak-kendaraan',
                'icon' => 'fas fa-file-invoice-dollar',
            ],
            [
                'nama' => 'STNK',
                'slug' => 'stnk',
                'icon' => 'fas fa-id-card',
            ],
            [
                'nama' => 'Aplikasi',
                'slug' => 'aplikasi',
                'icon' => 'fas fa-mobile-alt',
            ],
            [
                'nama' => 'Samsat',
                'slug' => 'samsat',
                'icon' => 'fas fa-building',
            ],
            [
                'nama' => 'Informasi Umum',
                'slug' => 'informasi-umum',
                'icon' => 'fas fa-info-circle',
            ],
        ];

        foreach ($kategoris as $kategori) {
            Kategori::create($kategori);
        }
    }
}
