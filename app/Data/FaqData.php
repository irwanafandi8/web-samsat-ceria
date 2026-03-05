<?php

namespace App\Data;

class FaqData
{
    public static function getAll(): array
    {
        return [
            [
                'kategori' => 'Umum',
                'icon'     => 'fas fa-info-circle',
                'faqs'     => [
                    [
                        'pertanyaan' => 'Apa itu Samsat Ceria?',
                        'jawaban'    => 'Samsat Ceria adalah aplikasi layanan digital untuk pengesahan STNK tahunan, pembayaran Pajak Kendaraan (PK), serta pembayaran Sumbangan Wajib Dana Kecelakaan Lalu Lintas Jalan (SWDKLLJ) yang dapat dilakukan secara online melalui smartphone.',
                    ],
                    [
                        'pertanyaan' => 'Apakah Samsat Ceria resmi dan aman digunakan?',
                        'jawaban'    => 'Ya, Samsat Ceria adalah aplikasi resmi yang terintegrasi langsung dengan sistem Kepolisian Republik Indonesia, Badan Pendapatan Daerah, dan Jasa Raharja. Data pengguna dilindungi dengan enkripsi SSL/TLS dan sistem keamanan berlapis.',
                    ],
                    [
                        'pertanyaan' => 'Di mana saya bisa mengunduh aplikasi Samsat Ceria?',
                        'jawaban'    => 'Aplikasi Samsat Ceria tersedia di Google Play Store untuk perangkat Android. Cukup cari "Samsat Ceria" di kolom pencarian dan tap tombol Install.',
                    ],
                    [
                        'pertanyaan' => 'Apakah Samsat Ceria tersedia untuk iPhone (iOS)?',
                        'jawaban'    => 'Saat ini Samsat Ceria baru tersedia untuk perangkat Android. Versi iOS sedang dalam proses pengembangan dan akan segera hadir.',
                    ],
                    [
                        'pertanyaan' => 'Apakah penggunaan aplikasi Samsat Ceria gratis?',
                        'jawaban'    => 'Aplikasi Samsat Ceria dapat diunduh dan digunakan secara gratis. Biaya yang dikenakan hanya untuk transaksi pajak kendaraan sesuai ketentuan yang berlaku.',
                    ],
                ],
            ],
            [
                'kategori' => 'Akun & Registrasi',
                'icon'     => 'fas fa-user-circle',
                'faqs'     => [
                    [
                        'pertanyaan' => 'Bagaimana cara mendaftarkan akun Samsat Ceria?',
                        'jawaban'    => 'Unduh aplikasi Samsat Ceria, buka aplikasi dan tap "Daftar", isi formulir dengan NIK dan nomor HP aktif, masukkan kode OTP yang dikirim ke HP Anda, lalu lakukan verifikasi wajah. Akun Anda akan langsung aktif setelah proses selesai.',
                    ],
                    [
                        'pertanyaan' => 'Apa saja dokumen yang diperlukan untuk mendaftar?',
                        'jawaban'    => 'Untuk mendaftar Anda memerlukan: KTP yang masih berlaku, nomor HP aktif untuk menerima OTP, dan alamat email aktif. Pastikan foto KTP yang diunggah jelas dan tidak buram.',
                    ],
                    [
                        'pertanyaan' => 'Bagaimana jika saya lupa password akun?',
                        'jawaban'    => 'Tap tombol "Lupa Password" di halaman login, masukkan nomor HP atau email terdaftar, lalu ikuti instruksi reset password yang dikirim melalui SMS atau email.',
                    ],
                    [
                        'pertanyaan' => 'Apakah satu akun bisa digunakan untuk beberapa kendaraan?',
                        'jawaban'    => 'Ya, satu akun Samsat Ceria dapat mendaftarkan dan mengelola beberapa kendaraan sekaligus. Anda dapat menambahkan kendaraan melalui menu "Kendaraan Saya" di dashboard.',
                    ],
                    [
                        'pertanyaan' => 'Bagaimana cara mengubah data profil akun saya?',
                        'jawaban'    => 'Buka aplikasi, tap ikon profil di pojok kanan atas, pilih "Edit Profil", ubah data yang ingin diperbarui, lalu tap "Simpan". Konfirmasi perubahan akan dikirim melalui OTP ke nomor HP terdaftar.',
                    ],
                ],
            ],
            [
                'kategori' => 'Pembayaran Pajak',
                'icon'     => 'fas fa-credit-card',
                'faqs'     => [
                    [
                        'pertanyaan' => 'Metode pembayaran apa saja yang tersedia?',
                        'jawaban'    => 'Samsat Ceria menyediakan berbagai metode pembayaran: Transfer Bank (BNI, Mandiri, BCA, BRI), E-Wallet (GoPay, OVO, Dana, LinkAja), Virtual Account, serta pembayaran di minimarket (Alfamart dan Indomaret).',
                    ],
                    [
                        'pertanyaan' => 'Berapa lama proses verifikasi pembayaran?',
                        'jawaban'    => 'Verifikasi pembayaran melalui e-wallet berlangsung secara instan. Untuk transfer bank dan virtual account, verifikasi membutuhkan waktu 1-2 jam setelah pembayaran dilakukan.',
                    ],
                    [
                        'pertanyaan' => 'Apakah ada biaya administrasi tambahan?',
                        'jawaban'    => 'Terdapat biaya administrasi yang bervariasi tergantung metode pembayaran yang dipilih. Rincian biaya akan ditampilkan secara transparan sebelum Anda mengkonfirmasi pembayaran.',
                    ],
                    [
                        'pertanyaan' => 'Apa yang harus dilakukan jika pembayaran gagal?',
                        'jawaban'    => 'Jika pembayaran gagal, cek status transaksi di menu "Riwayat Transaksi". Pastikan saldo atau limit mencukupi, lalu coba lagi. Jika masalah berlanjut, hubungi tim support kami melalui menu "Hubungi Kami".',
                    ],
                    [
                        'pertanyaan' => 'Bagaimana cara mendapatkan bukti pembayaran?',
                        'jawaban'    => 'Bukti pembayaran akan dikirim otomatis ke email terdaftar setelah transaksi berhasil. Anda juga dapat mengunduh invoice melalui menu "Riwayat Transaksi" → pilih transaksi → tap "Unduh Invoice".',
                    ],
                ],
            ],
            [
                'kategori' => 'Dokumen & Pengiriman',
                'icon'     => 'fas fa-file-alt',
                'faqs'     => [
                    [
                        'pertanyaan' => 'Berapa lama proses pengiriman dokumen STNK?',
                        'jawaban'    => 'Proses pengiriman dokumen membutuhkan waktu 3-5 hari kerja setelah pembayaran terverifikasi. Rinciannya: verifikasi pembayaran (1-2 jam), proses administrasi (1-2 hari kerja), pengiriman kurir (2-3 hari kerja).',
                    ],
                    [
                        'pertanyaan' => 'Bagaimana cara melacak pengiriman dokumen?',
                        'jawaban'    => 'Buka menu "Status Pengiriman" di aplikasi, pilih transaksi yang ingin dilacak, lalu tap "Lacak". Anda juga akan menerima notifikasi otomatis setiap kali status pengiriman berubah.',
                    ],
                    [
                        'pertanyaan' => 'Apa itu E-TBPKB dan apa kegunaannya?',
                        'jawaban'    => 'E-TBPKB (Electronic Tanda Bukti Pemilikan Kendaraan Bermotor) adalah versi digital dari dokumen TBPKB yang memiliki kekuatan hukum sama dengan dokumen fisik dan diakui secara resmi oleh kepolisian.',
                    ],
                    [
                        'pertanyaan' => 'Apakah dokumen digital (E-TBPKB, E-Pengesahan) sah secara hukum?',
                        'jawaban'    => 'Ya, semua dokumen digital yang diterbitkan melalui Samsat Ceria memiliki kekuatan hukum yang sama dengan dokumen fisik. Setiap dokumen dilengkapi dengan QR code untuk verifikasi keaslian oleh pihak berwenang.',
                    ],
                    [
                        'pertanyaan' => 'Apa yang harus dilakukan jika dokumen tidak sampai?',
                        'jawaban'    => 'Jika dokumen tidak sampai dalam waktu 7 hari kerja, segera hubungi tim support kami melalui menu "Hubungi Kami" dengan menyertakan nomor transaksi dan nomor resi pengiriman untuk ditindaklanjuti.',
                    ],
                ],
            ],
            [
                'kategori' => 'Bantuan & Dukungan',
                'icon'     => 'fas fa-headset',
                'faqs'     => [
                    [
                        'pertanyaan' => 'Bagaimana cara menghubungi tim support Samsat Ceria?',
                        'jawaban'    => 'Anda dapat menghubungi tim support melalui: formulir di halaman "Hubungi Kami", live chat di aplikasi, atau WhatsApp Business. Tim kami siap melayani 24 jam sehari, 7 hari seminggu.',
                    ],
                    [
                        'pertanyaan' => 'Berapa lama waktu respons dari tim support?',
                        'jawaban'    => 'Live chat dan WhatsApp memiliki rata-rata waktu respons di bawah 30 menit. Untuk pertanyaan via email atau formulir, kami akan merespons dalam 1x24 jam pada hari kerja.',
                    ],
                    [
                        'pertanyaan' => 'Apakah ada panduan penggunaan aplikasi?',
                        'jawaban'    => 'Ya, panduan lengkap penggunaan aplikasi tersedia di halaman Tutorial website ini. Panduan mencakup cara registrasi, login, pembayaran pajak, hingga penerbitan dokumen digital.',
                    ],
                    [
                        'pertanyaan' => 'Apa yang harus dilakukan jika aplikasi mengalami error?',
                        'jawaban'    => 'Coba tutup dan buka kembali aplikasi. Jika masalah berlanjut, pastikan aplikasi sudah diperbarui ke versi terbaru. Jika masih bermasalah, hubungi tim support dengan menyertakan tangkapan layar error yang terjadi.',
                    ],
                ],
            ],
        ];
    }
}
