<?php

namespace Database\Seeders;

use App\Models\Artikel;
use Illuminate\Database\Seeder;

class ArtikelSeeder extends Seeder
{
    public function run(): void
    {
        $artikels = [
            [
                'judul'    => 'Cara Cek Pajak Kendaraan Bermotor via Online Bisa Pakai Ponsel',
                'slug'     => 'cara-cek-pajak-kendaraan-bermotor-via-online-bisa-pakai-ponsel',
                'sumber'   => 'TANGSELIFE.COM',
                'kategori_id' => 1,
                'gambar'   => 'assets/images/artikel/poster-artikel-1.png',
                'deskripsi' => json_encode([
                    'TANGSELIFE.COM- Cek pajak kendaraan bermotor via online kini semakin mudah hanya melalui ponsel. Pengecekan pajak kendaraan bermotor lewat ponsel pun memudahkan masyarakat manusia tanpa harus terganggu kegiatan sehari-harinya. Saat ini, pemohon tidak perlu lagi datang ke kantor Samsat hanya untuk mengecek pajak kendaraan bermotor.',
                    'Dengan teknologi dan informasi yang semakin berkembang, wajib pajak bisa mengecek pajak kendaraan bermotor dengan mudah dan praktis hanya dengan menggunakan ponsel. Dalam kepemilikan kendaraan,pemilik kendaraan wajib membayar pajak setahun sekali. Tarif dan waktu pembayaran dapat berbeda tergantung jenis dan waktu pembelian kendaraan. Setiap tahunnya, jumlah pajak yang harus diawasi bisa mengalami perubahan, baik kenaikan maupun penurunan, tergantung pada besaran denda kendaraan. Namun,umumnya perolehan pendapatan negara dari pajak tak berbeda dari tahun-tahun sebelumnya.',
                    'Pada umumnya, informasi pajak kendaraan tertera pada Surat Tanda Nomor Kendaraan (STNK),namun jika pemilik kendaraan terlambat membayar, jumlah pajak yang harus dibayarkan akan meningkat. Maka dari itu, pemilik kendaraan bermotor perlu mengecek pajak kendaraan bermotor secara rutin, agar tidak terkena denda pajak yang cukup besar. Saat ini, pemilik kendaraan bisa melakukan pengecekan pajak kendaraan bermotor secara online melalui situs web resmi atau aplikasi, bahkan cukup dengan mengirim SMS. Tidak diperlukan nomor identitas KTP, cukup memasukkan nomor yang tertera pada pelat nomor kendaraan, baik itu kendaraan roda dua atau roda empat.',
                    'Sementara untuk warga di Jakarta terdapat pilihan untuk pengecekan pajak kendaraan bermotor secara online. Seperti melalui situs web, SMS, atau aplikasi resmi, yang tentunya lebih praktis dan efisien daripada harus pergi ke kantor Samsat terdekat.',
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul'    => 'Notifikasi Real-time Pembayaran Pajak',
                'slug'     => 'notifikasi-real-time-pembayaran-pajak',
                'sumber'   => 'Samsat Ceria',
                'kategori_id' => 3,
                'gambar'   => 'assets/images/artikel/poster-artikel-1.png',
                'deskripsi' => json_encode([
                    'Fitur notifikasi real-time pada aplikasi Samsat Ceria merupakan inovasi terbaru yang dirancang untuk memudahkan pengguna dalam memantau status pembayaran pajak kendaraan mereka.',
                    'Pengguna dapat memilih preferensi notifikasi melalui berbagai saluran, termasuk push notification di aplikasi, WhatsApp, SMS, dan email.',
                    'Selain notifikasi transaksional, fitur ini juga dilengkapi dengan sistem pengingat cerdas yang akan aktif secara otomatis menjelang jatuh tempo pembayaran pajak.',
                    'Pengguna juga dapat mengatur frekuensi dan waktu pengiriman notifikasi sesuai dengan kenyamanan mereka. Fitur ini terbukti efektif mengurangi tingkat keterlambatan pembayaran pajak hingga 45%.',
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul'    => 'Akses Riwayat Transaksi Kapan Saja',
                'slug'     => 'akses-riwayat-transaksi-kapan-saja',
                'sumber'   => 'Samsat Ceria',
                'kategori_id' => 3,
                'gambar'   => 'assets/images/artikel/poster-artikel-1.png',
                'deskripsi' => json_encode([
                    'Fitur riwayat transaksi pada aplikasi Samsat Ceria memberikan kemudahan luar biasa bagi pengguna untuk mengakses seluruh histori pembayaran pajak kendaraan secara lengkap, akurat, dan terstruktur.',
                    'Setiap entri transaksi menampilkan informasi komprehensif termasuk tanggal dan waktu pembayaran, nominal pajak yang dibayarkan, metode pembayaran yang digunakan, nomor referensi transaksi, dan status verifikasi.',
                    'Pengguna dapat memanfaatkan fitur filter canggih untuk menyaring transaksi berdasarkan berbagai kriteria seperti periode waktu, jenis kendaraan, status pembayaran, atau rentang nominal tertentu.',
                    'Yang lebih memudahkan, pengguna dapat mengekspor laporan riwayat transaksi dalam berbagai format file seperti PDF, Excel, atau CSV untuk keperluan arsip dan pembukuan pribadi.',
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul'    => 'Keamanan Data Terenkripsi',
                'slug'     => 'keamanan-data-terenkripsi',
                'sumber'   => 'Samsat Ceria',
                'kategori_id' => 3,
                'gambar'   => 'assets/images/artikel/poster-artikel-1.png',
                'deskripsi' => json_encode([
                    'Samsat Ceria menerapkan sistem keamanan berlapis dengan standar tertinggi untuk melindungi data pribadi dan transaksi pengguna dari berbagai ancaman siber yang terus berkembang.',
                    'Setiap data yang dikirim antara aplikasi pengguna dan server Samsat diamankan dengan protokol SSL/TLS versi 1.3 dengan enkripsi AES-256-GCM, algoritma enkripsi yang digunakan oleh lembaga keuangan global.',
                    'Data sensitif seperti nomor KTP, alamat lengkap, dan informasi kendaraan disimpan dalam bentuk hash satu arah dengan salt unik, sehingga tidak dapat dikembalikan ke bentuk aslinya jika terjadi kebocoran.',
                    'Fitur keamanan tambahan seperti two-factor authentication (2FA) dan verifikasi biometrik memberikan perlindungan ekstra saat login atau melakukan transaksi nominal besar.',
                    'Tim keamanan Samsat Ceria melakukan penetration testing secara rutin setiap bulan dan bekerja sama dengan perusahaan keamanan siber internasional untuk audit keamanan independen setiap kuartal.',
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul'    => 'Laporan Pajak Otomatis',
                'slug'     => 'laporan-pajak-otomatis',
                'sumber'   => 'Samsat Ceria',
                'kategori_id' => 1,
                'gambar'   => 'assets/images/artikel/poster-artikel-1.png',
                'deskripsi' => json_encode([
                    'Fitur laporan pajak otomatis dari Samsat Ceria merupakan solusi cerdas bagi pemilik kendaraan yang membutuhkan rekapitulasi pembayaran pajak secara akurat dan profesional tanpa repot menghitung manual.',
                    'Pengguna dapat memilih berbagai jenis laporan sesuai kebutuhan, mulai dari laporan ringkasan sederhana hingga laporan detail dengan analisis mendalam.',
                    'Laporan per kendaraan sangat berguna bagi pemilik lebih dari satu kendaraan, menampilkan rincian pembayaran untuk masing-masing kendaraan beserta status pajak terkini.',
                    'Laporan yang dihasilkan dapat diekspor dalam berbagai format file profesional: PDF, Excel, CSV, atau JSON untuk pengembang yang membutuhkan akses API.',
                    'Fitur penjadwalan laporan otomatis memungkinkan pengguna untuk menerima laporan secara rutin melalui email setiap minggu, bulan, atau kuartal tanpa perlu mengunduh manual.',
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul'    => 'Bantuan 24/7 via Chat dan Telepon',
                'slug'     => 'bantuan-247-via-chat-dan-telepon',
                'sumber'   => 'Samsat Ceria',
                'kategori_id' => 5,
                'gambar'   => 'assets/images/artikel/poster-artikel-1.png',
                'deskripsi' => json_encode([
                    'Layanan customer service Samsat Ceria hadir dengan komitmen untuk memberikan dukungan penuh kepada pengguna selama 24 jam sehari, 7 hari seminggu, termasuk hari libur nasional.',
                    'Pengguna dapat memilih saluran komunikasi yang paling nyaman: live chat di aplikasi, WhatsApp Business, telepon, atau email untuk pertanyaan kompleks.',
                    'Setiap saluran didukung oleh sistem ticketing terintegrasi yang memastikan tidak ada pertanyaan yang terlewat atau tertunda tanpa penanganan.',
                    'Fitur FAQ interaktif dan knowledge base yang terus diperbarui berisi ribuan artikel panduan, tutorial video langkah demi langkah, dan tips troubleshooting.',
                    'Pengguna juga dapat mengakses forum komunitas untuk berdiskusi dengan sesama pengguna, berbagi pengalaman, dan mendapatkan tips dari pengguna senior.',
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul'    => 'Cek Denda Pajak Kendaraan Online',
                'slug'     => 'cek-denda-pajak-kendaraan-online',
                'sumber'   => 'Samsat Ceria',
                'kategori_id' => 1,
                'gambar'   => 'assets/images/artikel/poster-artikel-1.png',
                'deskripsi' => json_encode([
                    'Fitur cek denda pajak kendaraan online dari Samsat Ceria memberikan kemudahan bagi pengguna untuk menghitung secara akurat besaran denda yang harus dibayar jika terlambat melakukan pembayaran pajak.',
                    'Ketika pengguna memasukkan nomor plat kendaraan dan periode keterlambatan, sistem akan melakukan kalkulasi multidimensional yang mempertimbangkan berbagai faktor.',
                    'Hasil perhitungan ditampilkan secara transparan dengan rincian komponen lengkap: pajak pokok, denda keterlambatan, SWDKLLJ, biaya administrasi, dan total keseluruhan.',
                    'Fitur simulasi memungkinkan pengguna untuk melihat bagaimana besaran denda berubah jika mereka membayar hari ini dibandingkan jika menunda ke waktu berikutnya.',
                    'Fitur ini tidak hanya membantu pengguna merencanakan keuangan, tetapi juga mendorong kepatuhan pajak dengan menunjukkan konsekuensi finansial dari keterlambatan.',
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul'    => 'Perpanjangan STNK Online',
                'slug'     => 'perpanjangan-stnk-online',
                'sumber'   => 'Samsat Ceria',
                'kategori_id' => 2,
                'gambar'   => 'assets/images/artikel/poster-artikel-1.png',
                'deskripsi' => json_encode([
                    'Layanan perpanjangan STNK online dari Samsat Ceria merevolusi cara pemilik kendaraan memperpanjang masa berlaku STNK, mengubah proses yang dulu rumit menjadi pengalaman digital yang mulus dan nyaman.',
                    'Langkah pertama, pengguna cukup mengunggah dokumen-dokumen yang diperlukan melalui aplikasi: foto STNK lama, KTP pemilik, foto cek fisik kendaraan, dan foto kendaraan dari berbagai sudut.',
                    'Setelah dokumen terverifikasi, pengguna akan melihat rincian biaya yang harus dibayar termasuk pajak tahunan, SWDKLLJ, biaya administrasi, dan biaya pengiriman STNK baru.',
                    'STNK baru akan dicetak dengan fitur keamanan terkini termasuk hologram, QR code, dan microtext, kemudian dikirim ke alamat pengguna melalui jasa pengiriman ekspres.',
                    'Rata-rata waktu pemrosesan dari pengajuan hingga STNK sampai di tangan pengguna adalah 3-5 hari kerja. Fitur ini telah membantu lebih dari 500.000 pemilik kendaraan menghemat waktu.',
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul'    => 'Mutasi Kendaraan Antar Provinsi',
                'slug'     => 'mutasi-kendaraan-antar-provinsi',
                'sumber'   => 'Samsat Ceria',
                'kategori_id' => 2,
                'gambar'   => 'assets/images/artikel/poster-artikel-1.png',
                'deskripsi' => json_encode([
                    'Layanan mutasi kendaraan antar provinsi melalui Samsat Ceria merupakan terobosan besar yang memungkinkan pemilik kendaraan mengurus perpindahan registrasi kendaraan secara online end-to-end.',
                    'Proses mutasi dimulai dengan pengajuan online melalui aplikasi, di mana pengguna mengisi formulir digital yang secara cerdas menyesuaikan pertanyaan berdasarkan data kendaraan.',
                    'Sistem backend Samsat Ceria terintegrasi dengan database Samsat seluruh 34 provinsi di Indonesia, memungkinkan verifikasi data secara real-time antar provinsi.',
                    'Proses mutasi mencakup beberapa output dokumen: STNK baru dengan alamat provinsi tujuan, BPKB yang diperbarui, dan plat nomor kendaraan baru sesuai kode wilayah provinsi tujuan.',
                    'Layanan mutasi antar provinsi ini tidak hanya menghemat waktu dan biaya transportasi, tetapi juga memastikan legalitas kendaraan tetap terjaga sesuai domisili terbaru.',
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul'    => 'Samsat Keliling Lokasi Hari Ini',
                'slug'     => 'samsat-keliling-lokasi-hari-ini',
                'sumber'   => 'Samsat Ceria',
                'kategori_id' => 4,
                'gambar'   => 'assets/images/artikel/poster-artikel-1.png',
                'deskripsi' => json_encode([
                    'Fitur Samsat Keliling Lokasi Hari Ini pada aplikasi Samsat Ceria memberikan informasi komprehensif dan real-time mengenai keberadaan unit layanan Samsat Keliling di seluruh wilayah operasional.',
                    'Pengguna dapat mengakses peta interaktif yang menampilkan titik-titik lokasi Samsat Keliling dengan ikon berbeda berdasarkan status operasional secara real-time.',
                    'Setiap titik lokasi dapat diklik untuk menampilkan informasi detail lengkap: alamat persis, jam operasional, jenis layanan, estimasi waktu tunggu, dan fasilitas yang tersedia.',
                    'Fitur notifikasi cerdas memungkinkan pengguna untuk mengatur pengingat ketika unit Samsat Keliling berada di dekat lokasi tertentu.',
                    'Dengan kombinasi data real-time, analisis prediktif, dan antarmuka intuitif, fitur ini telah membantu lebih dari 1 juta pengguna menghemat waktu tunggu rata-rata 45 menit per kunjungan.',
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($artikels as $artikel) {
            Artikel::create($artikel);
        }
    }
}
