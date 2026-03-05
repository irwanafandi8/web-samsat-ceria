<?php

namespace App\Data;

class TutorialData
{
    public static function getAll(): array
    {
        return [

            // REGISTRASI
            'registrasi' => [
                'sections' => [
                    [
                        'id'     => 'registrasi-pengguna',
                        'judul'  => 'Cara Mendaftarkan Akun Samsat Ceria',
                        'images' => [
                            'assets/images/samsat-ceria-app.png',
                            'assets/images/samsat-ceria-app.png',
                        ],
                        'sub_sections' => [
                            [
                                'judul' => 'Langkah Registrasi',
                                'steps' => [
                                    'Unduh dan install aplikasi Samsat Ceria melalui Google Play Store',
                                    'Buka aplikasi, lalu tap tombol "Daftar"',
                                    'Isi formulir pendaftaran dengan NIK, nomor HP aktif, dan email',
                                    'Masukkan kode OTP yang dikirim ke nomor HP Anda',
                                    'Lakukan verifikasi wajah menggunakan kamera selfie sesuai panduan',
                                    'Akun berhasil dibuat dan siap digunakan',
                                ],
                            ],
                        ],
                    ],
                    [
                        'id'     => 'masuk-aplikasi',
                        'judul'  => 'Masuk Aplikasi',
                        'images' => [
                            'assets/images/samsat-ceria-app.png',
                            'assets/images/samsat-ceria-app.png',
                        ],
                        'sub_sections' => [
                            [
                                'judul' => 'Langkah Login',
                                'steps' => [
                                    'Buka aplikasi Samsat Ceria di smartphone Anda',
                                    'Tap tombol "Masuk" pada halaman utama',
                                    'Masukkan nomor HP atau NIK yang terdaftar',
                                    'Masukkan kode sandi akun Anda',
                                    'Lakukan verifikasi wajah untuk keamanan akun',
                                    'Berhasil masuk ke halaman dashboard utama',
                                ],
                            ],
                        ],
                    ],
                    [
                        'id'     => 'ubah-profil',
                        'judul'  => 'Ubah Profil',
                        'images' => [
                            'assets/images/samsat-ceria-app.png',
                            'assets/images/samsat-ceria-app.png',
                        ],
                        'sub_sections' => [
                            [
                                'judul' => 'Langkah Mengubah Profil',
                                'steps' => [
                                    'Tap ikon profil yang ada di pojok kanan atas dashboard',
                                    'Pilih menu "Edit Profil"',
                                    'Ubah informasi profil yang ingin diperbarui',
                                    'Tap tombol "Simpan" untuk menyimpan perubahan',
                                    'Konfirmasi perubahan dengan memasukkan kode OTP',
                                    'Profil berhasil diperbarui',
                                ],
                            ],
                        ],
                    ],
                ],
            ],

            // STNK
            'stnk' => [
                'sections' => [
                    [
                        'id'     => 'tambah-kendaraan',
                        'judul'  => 'Cara Mendaftarkan Kendaraan',
                        'images' => [
                            'assets/images/samsat-ceria-app.png',
                            'assets/images/samsat-ceria-app.png',
                        ],
                        'sub_sections' => [
                            [
                                'judul' => 'Langkah Pendaftaran Kendaraan',
                                'steps' => [
                                    'Buka menu "Kendaraan Saya" dari halaman dashboard',
                                    'Tap tombol "+ Tambah Kendaraan"',
                                    'Masukkan Nomor Polisi kendaraan Anda',
                                    'Masukkan NIK pemilik sesuai data pada STNK',
                                    'Masukkan 5 digit terakhir nomor rangka kendaraan',
                                    'Periksa kembali data yang diisi, lalu tap "Simpan"',
                                    'Kendaraan berhasil terdaftar dan siap digunakan',
                                ],
                            ],
                        ],
                    ],
                    [
                        'id'     => 'pengesahan-stnk',
                        'judul'  => 'Pengesahan STNK',
                        'images' => [
                            'assets/images/samsat-ceria-app.png',
                            'assets/images/samsat-ceria-app.png',
                        ],
                        'sub_sections' => [
                            [
                                'judul' => 'Langkah Pengesahan',
                                'steps' => [
                                    'Pilih kendaraan yang akan dilakukan pengesahan STNK',
                                    'Tap tombol "Setujui" untuk melanjutkan proses',
                                    'Pastikan data kendaraan dan jumlah pajak yang tertera sudah sesuai',
                                    'Pilih metode pembayaran yang tersedia (contoh: Virtual Account)',
                                    'Konfirmasi metode pembayaran dan jumlah yang harus dibayarkan',
                                    'Lakukan pembayaran sesuai instruksi yang ditampilkan',
                                    'Pengesahan STNK selesai dan dokumen siap dikirimkan',
                                ],
                            ],
                        ],
                    ],
                    [
                        'id'     => 'pengiriman-dokumen',
                        'judul'  => 'Proses Pengiriman Dokumen',
                        'images' => [
                            'assets/images/samsat-ceria-app.png',
                        ],
                        'sub_sections' => [
                            [
                                'judul' => 'Langkah Pengiriman',
                                'steps' => [
                                    'Isi alamat pengiriman dokumen dengan lengkap dan benar',
                                    'Pilih jasa pengiriman yang tersedia sesuai preferensi Anda',
                                    'Periksa kembali detail pengiriman, lalu tap "Konfirmasi"',
                                    'Dokumen akan diproses dan dikirim oleh kurir pilihan Anda',
                                    'Pantau status pengiriman melalui menu "Lacak Pengiriman"',
                                ],
                            ],
                        ],
                    ],
                ],
            ],

            // PEMBAYARAN
            'pembayaran' => [
                'sections' => [
                    [
                        'id'     => 'cara-pembayaran',
                        'judul'  => 'Cara Melakukan Pembayaran',
                        'images' => [
                            'assets/images/samsat-ceria-app.png',
                            'assets/images/samsat-ceria-app.png',
                        ],
                        'sub_sections' => [
                            [
                                'judul' => 'Langkah Pembayaran',
                                'steps' => [
                                    'Buka menu "Cek Pajak" dari halaman dashboard',
                                    'Pilih kendaraan yang ingin dibayar pajaknya',
                                    'Sistem akan menampilkan jumlah pajak yang harus dibayar',
                                    'Pilih metode pembayaran yang tersedia',
                                    'Tap "Bayar Pajak" dan selesaikan pembayaran sesuai instruksi',
                                    'Konfirmasi pembayaran akan dikirim melalui email dan SMS',
                                ],
                            ],
                        ],
                    ],
                    [
                        'id'     => 'status-transaksi',
                        'judul'  => 'Halaman Status Transaksi',
                        'images' => [
                            'assets/images/samsat-ceria-app.png',
                            'assets/images/samsat-ceria-app.png',
                        ],
                        'sub_sections' => [
                            [
                                'judul' => 'Cara Cek Status Transaksi',
                                'steps' => [
                                    'Buka menu "Riwayat Transaksi" dari halaman dashboard',
                                    'Pilih transaksi yang ingin dilihat statusnya',
                                    'Lihat status pembayaran: Sukses, Pending, atau Gagal',
                                    'Tap "Detail" untuk melihat informasi transaksi lengkap',
                                    'Unduh invoice atau bukti pembayaran jika diperlukan',
                                ],
                            ],
                        ],
                    ],
                    [
                        'id'     => 'status-pengiriman',
                        'judul'  => 'Halaman Status Pengiriman',
                        'images' => [
                            'assets/images/samsat-ceria-app.png',
                            'assets/images/samsat-ceria-app.png',
                        ],
                        'sub_sections' => [
                            [
                                'judul' => 'Cara Lacak Pengiriman',
                                'steps' => [
                                    'Buka menu "Status Pengiriman" dari halaman dashboard',
                                    'Pilih transaksi yang ingin dilacak pengirimannya',
                                    'Tap tombol "Lacak" untuk melihat posisi paket',
                                    'Lihat detail pelacakan dan estimasi tiba dokumen',
                                    'Notifikasi otomatis akan dikirim saat status pengiriman berubah',
                                ],
                            ],
                        ],
                    ],
                ],
            ],

            // DOKUMEN DIGITAL
            'dokumen-digital' => [
                'sections' => [
                    [
                        'id'     => 'e-tbpkb',
                        'judul'  => 'Penerbitan E-TBPKB',
                        'images' => [
                            'assets/images/samsat-ceria-app.png',
                            'assets/images/samsat-ceria-app.png',
                        ],
                        'sub_sections' => [
                            [
                                'judul' => 'Langkah Penerbitan',
                                'steps' => [
                                    'Buka menu "Dokumen Digital" dari halaman dashboard',
                                    'Pilih kendaraan yang akan diterbitkan E-TBPKB-nya',
                                    'Sistem menampilkan daftar E-TBPKB yang tersedia',
                                    'Tap tombol "Ajukan" untuk memulai proses penerbitan',
                                    'Tunggu proses verifikasi oleh sistem',
                                    'E-TBPKB berhasil diterbitkan dan dapat diunduh',
                                ],
                            ],
                        ],
                    ],
                    [
                        'id'     => 'e-pengesahan',
                        'judul'  => 'Penerbitan E-Pengesahan',
                        'images' => [
                            'assets/images/samsat-ceria-app.png',
                            'assets/images/samsat-ceria-app.png',
                        ],
                        'sub_sections' => [
                            [
                                'judul' => 'Langkah Penerbitan',
                                'steps' => [
                                    'Buka menu "Dokumen Digital" dari halaman dashboard',
                                    'Pilih kendaraan yang akan diterbitkan E-Pengesahan-nya',
                                    'Sistem menampilkan daftar E-Pengesahan yang tersedia',
                                    'Tap tombol "Ajukan" untuk memulai proses penerbitan',
                                    'E-Pengesahan berhasil diterbitkan dan siap digunakan',
                                ],
                            ],
                        ],
                    ],
                    [
                        'id'     => 'e-kd',
                        'judul'  => 'Penerbitan E-KD',
                        'images' => [
                            'assets/images/samsat-ceria-app.png',
                            'assets/images/samsat-ceria-app.png',
                        ],
                        'sub_sections' => [
                            [
                                'judul' => 'Langkah Penerbitan',
                                'steps' => [
                                    'Buka menu "Dokumen Digital" dari halaman dashboard',
                                    'Pilih kendaraan yang akan diterbitkan E-KD-nya',
                                    'Sistem menampilkan daftar E-KD yang tersedia',
                                    'Tap tombol "Ajukan" untuk memulai proses penerbitan',
                                    'Tunggu proses verifikasi dokumen oleh tim Samsat Ceria',
                                    'E-KD berhasil diterbitkan dan siap digunakan',
                                ],
                            ],
                        ],
                    ],
                ],
            ],

        ];
    }

    public static function getByPage(string $page): ?array
    {
        return self::getAll()[$page] ?? null;
    }
}
