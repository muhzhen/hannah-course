<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Course::create([
            'durasi_video' => '1 Jam',
            'tingkat_kesulitan' => 'Mudah',
            'judul' => 'Membangun Kemandirian Keuangan Nelayan Pesisir Wallacea',
            'deskripsi' => 'Pelatihan ini dilaksanakan dengan berbagai latar belakang kondisi kemandirian keuangan nelayan pesisir di Wallacea yang berdasarkan riset bersama narasumber Mardiyah, Independent Financial Advisor. Salah satu yang ditemukan adalah pengeluaran yang lebih besar dari pendapatan nelayan. Pelatihan Sesi 1 merupakan bagian dari Serial Pelatihan Cerdas Keuangan Ekonomi Pesisir yang digelar sebanyak 5 sesi pelatihan, untuk Komunitas dan Nelayan Pesisir Wallacea. ',
            'url' => 'UKZfhqP2-Gg',
            'is_active' => true,
        ]);

        Course::create([
            'durasi_video' => '1 Jam 28 Menit',
            'tingkat_kesulitan' => 'Mudah',
            'judul' => 'Merancang Impian Kelurga Nelayan : Arus Kas & Perencanaan Keuangan',
            'deskripsi' => 'Teori tanpa praktik apalah gunanya. Narasumber dari Hannah Asa Indonesia membentangkan cakrawala mengenai Arus Kas dan Perencanaan Keuangan yang disertai template arus kas dan anggaran keuangan. Lalu, mengajak peserta untuk latihan bersama. Silakan simak dalam video ini! Pelatihan sesi kedua ini merupakan bagian dari Sesi Pelatihan Nelayan Cerdas Keuangan Pesisir. Yang diinisiasi Yayasan Penabulu melalui Program Lingkar Madani dan didukung The David and Lucile Packard.',
            'url' => '7lnor3k_B-U',
            'is_active' => true,
        ]);

        Course::create([
            'durasi_video' => '1 Jam 22 Menit',
            'tingkat_kesulitan' => 'Mudah',
            'judul' => 'Siap Memiliki Dana Darurat dan Manajemen Hutang',
            'deskripsi' => 'Bagaimana mengumpulkan dana darurat sementara kita masih memiliki hutang atau cicilan? Simak video pelatihan ini dengan narasumber seorang Financial Advisor dari Hannah Asa Indonesia.Pelatihan sesi ketiga ini diinisiasi Yayasan Penabulu melalui Program Lingkar Madani dan didukung The David and Lucile Packard.',
            'url' => 'Rs3PZQDFaH8',
            'is_active' => true,
        ]);

        Course::create([
            'durasi_video' => '1 Jam 44 Menit',
            'tingkat_kesulitan' => 'Mudah',
            'judul' => 'Manfaat Asuransi dan Investasi bagi Nelayan Pesisir',
            'deskripsi' => 'Kita sering mendengar lontaran negatif beberapa masyarakat terkait asuransi. Asuransi masih memiliki image yang kurang bagus, ditambah masyarakat masih mempercayai mitos. Mengenai mitos, asuransi memiliki mitos yang mengatakan bahwa sulit sekali jika kita ingin mengklaim asuransi. Sehingga masih sedikit masyarakat yang sadar pentingnya asuransi. Namun, apakah asuransi dan produk investasi lainnya penting bagi nelayan pesisir di Wallacea?Tonton sampai habis video ini bersama narasumber Mardiyah, Independent Financial Advisor, Seri Pelatihan ini diinisiasi Yayasan Penabulu melalui Program Lingkar Madani dan didukung The David and Lucile Packard.',
            'url' => 'PxC9CV4p4gE',
            'is_active' => true,
        ]);

        Course::create([
            'durasi_video' => '1 Jam 35 Menit',
            'tingkat_kesulitan' => 'Mudah',
            'judul' => 'Persiapan Masa Pensiun Nelayan Pesisir Wallacea',
            'deskripsi' => 'Inflasi ekonomi akan dirasakan bukan untuk saat ini, tetapi 10 atau 20 atau 50 tahun lagi yang dapat memberikan kita keuntungan. Rugi sekali jika saat ini, kita tidak melakukan apa-apa dengan keuangan kita. Misalkan mempersiapkan dana pensiun dari sekarang. Simak pelatihan melalui video ini. Simak sampai habis video kelas ini bersama narasumber Mardiyah, Independent Financial Advisor, Seri Pelatihan ini diinisiasi Yayasan Penabulu melalui Program Lingkar Madani dan didukung The David and Lucile Packard.',
            'url' => 'XFrTmBSDgCE',
            'is_active' => true,
        ]);

    }
}
