<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CmsLandingPage;

class CMSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CmsLandingPage::create([
            'section1_title' => 'ICONIC',
            'section1_content' => 'Merupakan singkatan dari <strong>Icon Innovation Center</strong>, yang digunakan sebagai media sosial inovasi bagi karyawan PLN untuk dapat menyampaikan ide dan berkolaborasi mengembangkannya',
            'section2_title' => 'Berpartisipasi di ICONIC',
            'section2_subtitle1' => 'Buat ide mu',
            'section2_subtitle1_content' => 'Submit ide mu tanpa ragu, untuk semua orang, kapan pun! Inspirasi tak mengenal batas.',
            'section2_subtitle2' => 'Mari Berkoaborasi',
            'section2_subtitle2_content' => 'Kamu dapat berkolaborasi untuk membuat idea kamu semakin berkembang.',
            'section2_subtitle3' => 'Bangun Inovasi',
            'section2_subtitle3_content' => 'Jadilah bagian dari ekosistem inovasi dengan berperan aktif dalam perkembangan ide.',
            'section2_subtitle4' => 'Wujudkan Idemu',
            'section2_subtitle4_content' => 'Mari kita wujudkan ide yang dimiliki melalui program inovasi yang diselenggarakan oleh PLN.',
            'section3_title' => 'Alur ICONIC',
            'section3_subtitle1_content' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using, making it look like readable English. Many desktop publishing packages and web page editors infancy.',
            'section3_subtitle2_content' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using, making it look like readable English. Many desktop publishing packages and web page editors infancy.',
            'section3_subtitle3_content' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using, making it look like readable English. Many desktop publishing packages and web page editors infancy.',
            'section3_subtitle4_content' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using, making it look like readable English. Many desktop publishing packages and web page editors infancy.',
            'section3_subtitle5_content' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using, making it look like readable English. Many desktop publishing packages and web page editors infancy.',
        ]);
    }
}
