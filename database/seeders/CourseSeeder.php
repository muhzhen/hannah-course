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
            'durasi_video' => '3 Menit',
            'tingkat_kesulitan' => 'Pemula',
            'judul' => 'Apa Itu Financial Literasi ?',
            'deskripsi' => 'Financial literacy atau literasi keuangan adalah kemampuan untuk memahami dan mengelola keuangan secara efektif. Ini mencakup pengetahuan tentang berbagai konsep keuangan seperti anggaran, tabungan, investasi, hutang, dan pengelolaan risiko. Literasi keuangan penting agar seseorang dapat membuat keputusan keuangan yang cerdas dan bertanggung jawab, sehingga mampu mencapai tujuan finansial jangka panjang, menghindari masalah utang, dan menjaga kestabilan keuangan pribadi.',
            'url' => 'KfAU6YVVS7k',
            'is_active' => true,
        ]);

        Course::create([
            'durasi_video' => '2 Menit',
            'tingkat_kesulitan' => 'Pemula',
            'judul' => 'Belajar Financial Literasi Tahap 2',
            'deskripsi' => 'Belajar Financial Literasi Tahap 2 merupakan langkah lanjutan dalam memahami dan mengelola keuangan secara lebih mendalam. Pada tahap ini, fokusnya adalah memperdalam pengetahuan tentang konsep keuangan yang lebih kompleks, seperti investasi, diversifikasi portofolio, manajemen risiko, serta strategi perencanaan keuangan jangka panjang. Tahap ini juga mencakup pemahaman tentang produk-produk keuangan yang lebih kompleks, seperti saham, obligasi, reksa dana, dan asuransi.',
            'url' => 'bD9CCXtQ72E',
            'is_active' => true,
        ]);
    }
}
