<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Idea;

class IdeaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Idea::create([
            'user_id' => 1,
            'thumbnail' => 'thumbnails/default-tumbnail-idea.png',
            'title' => '<p>Strategi Penerapan Teknologi Hybrid Power System pada PLN untuk Meningkatkan Ketersediaan Energi Listrik</p>',
            'background' => '<p>LHybrid Power System pada PLN orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. belakang</p>',
            'purpose' => '<p>Hybrid Power System pada PLN Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>',
            'solution' => '<p?>Hybrid Power System pada PLN Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>',
            'team' => 'Developer LOD, James Bond, John Doe, Andrea Galaxy, Seilal Farah',
            'status' => 'ide',
            'attachment' => ['attachments/attachment-icon.png', 'attachments/attachment-icon.png', 'attachments/attachment-icon.png'],
            'total_views' => 0,
            'total_comments' => 1,
            'created_at' => '2023-11-25 14:07:53'
        ]);
        Idea::create([
            'user_id' => 1,
            'thumbnail' => 'thumbnails/default-tumbnail-idea.png',
            'title' => '<p>Strategi Penerapan Teknologi Hybrid Power System pada PLN untuk Meningkatkan Ketersediaan Energi Listrik</p>',
            'background' => '<p>LHybrid Power System pada PLN orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. belakang</p>',
            'purpose' => '<p>Hybrid Power System pada PLN Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>',
            'solution' => '<p?>Hybrid Power System pada PLN Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>',
            'team' => 'Developer LOD, James Bond, John Doe, Andrea Galaxy, Seilal Farah',
            'status' => 'ide',
            'attachment' => ['attachments/attachment-icon.png', 'attachments/attachment-icon.png', 'attachments/attachment-icon.png'],
            'total_views' => 0,
            'total_comments' => 3,
            'created_at' => '2023-12-11 14:07:53'
        ]);
        Idea::create([
            'user_id' => 1,
            'thumbnail' => 'thumbnails/default-tumbnail-idea.png',
            'title' => '<p>Analisis Dampak Penggunaan Teknologi Microgrid terhadap Keberlanjutan Energi di Lingkungan PLN</p>',
            'background' => '<p>Teknologi Microgrid Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. belakang</p>',
            'purpose' => '<p>Teknologi Microgrid Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>',
            'solution' => '<p?>Teknologi Microgrid Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>',
            'team' => 'Developer LOD, Marteen Bruelee, John Doe, Andrea Galaxy, Seilal Farah',
            'status' => 'ide',
            'attachment' => ['attachments/attachment-icon.png', 'attachments/attachment-icon.png', 'attachments/attachment-icon.png'],
            'total_views' => 0,
            'total_comments' => 1,
            'created_at' => '2023-12-25 14:07:53'
        ]);
        Idea::create([
            'user_id' => 1,
            'thumbnail' => 'thumbnails/default-tumbnail-idea.png',
            'title' => '<p>Strategi Penerapan Teknologi Hybrid Power System pada PLN untuk Meningkatkan Ketersediaan Energi Listrik</p>',
            'background' => '<p>LHybrid Power System pada PLN orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. belakang</p>',
            'purpose' => '<p>Hybrid Power System pada PLN Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>',
            'solution' => '<p?>Hybrid Power System pada PLN Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>',
            'team' => 'Developer LOD, James Bond, John Doe, Andrea Galaxy, Seilal Farah',
            'status' => 'ide',
            'attachment' => ['attachments/attachment-icon.png', 'attachments/attachment-icon.png', 'attachments/attachment-icon.png'],
            'total_views' => 0,
            'total_comments' => 2,
            'created_at' => '2024-01-01 14:07:53'
        ]);
        Idea::create([
            'user_id' => 1,
            'thumbnail' => 'thumbnails/default-tumbnail-idea.png',
            'title' => '<p>Strategi Penerapan Teknologi Hybrid Power System pada PLN untuk Meningkatkan Ketersediaan Energi Listrik</p>',
            'background' => '<p>LHybrid Power System pada PLN orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. belakang</p>',
            'purpose' => '<p>Hybrid Power System pada PLN Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>',
            'solution' => '<p?>Hybrid Power System pada PLN Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>',
            'team' => 'Developer LOD, James Bond, John Doe, Andrea Galaxy, Seilal Farah',
            'status' => 'ide',
            'attachment' => ['attachments/attachment-icon.png', 'attachments/attachment-icon.png', 'attachments/attachment-icon.png'],
            'total_views' => 0,
            'total_comments' => 2,
            'created_at' => '2024-01-09 14:07:53'
        ]);
        Idea::create([
            'user_id' => 1,
            'thumbnail' => 'thumbnails/default-tumbnail-idea.png',
            'title' => '<p>Analisis Dampak Penggunaan Teknologi Microgrid terhadap Keberlanjutan Energi di Lingkungan PLN</p>',
            'background' => '<p>Teknologi Microgrid Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. belakang</p>',
            'purpose' => '<p>Teknologi Microgrid Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>',
            'solution' => '<p?>Teknologi Microgrid Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>',
            'team' => 'Developer LOD, Marteen Bruelee, John Doe, Andrea Galaxy, Seilal Farah',
            'status' => 'ide',
            'attachment' => ['attachments/attachment-icon.png', 'attachments/attachment-icon.png', 'attachments/attachment-icon.png'],
            'total_views' => 0,
            'total_comments' => 3,
            'created_at' => '2024-01-11 14:07:53'
        ]);
        //7
        Idea::create([
            'user_id' => 2,
            'thumbnail' => 'thumbnails/default-tumbnail-idea.png',
            'title' => '<p>Peningkatan Keandalan Jaringan Distribusi PLN dengan Menggunakan Teknologi Self-Healing Grid</p>',
            'background' => '<p>Distribusi PLN Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. belakang</p>',
            'purpose' => '<p>Distribusi PLN is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>',
            'solution' => '<p?>Distribusi PLN Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>',
            'team' => 'Naufal Fakhrian, Alex marchel, John Doe, Andrea Galaxy, Seilal Farah',
            'status' => 'ide',
            'attachment' => ['attachments/attachment-icon.png', 'attachments/attachment-icon.png', 'attachments/attachment-icon.png'],
            'total_views' => 0,
            'total_comments' => 0,
            'created_at' => '2024-01-20 14:07:53'
        ]);
        Idea::create([
            'user_id' => 2,
            'thumbnail' => 'thumbnails/default-tumbnail-idea.png',
            'title' => '<p>Peningkatan Distribusi PLN dengan Menggunakan Teknologi Self-Healing Grid</p>',
            'background' => '<p>Distribusi PLN Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. belakang</p>',
            'purpose' => '<p>Distribusi PLN is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>',
            'solution' => '<p?>Distribusi PLN Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>',
            'team' => 'Naufal Fakhrian, Alex marchel, John Doe, Andrea Galaxy, Seilal Farah',
            'status' => 'ide',
            'attachment' => ['attachments/attachment-icon.png', 'attachments/attachment-icon.png', 'attachments/attachment-icon.png'],
            'total_views' => 0,
            'total_comments' => 0,
            'created_at' => '2024-02-11 14:07:53'
        ]);
        Idea::create([
            'user_id' => 2,
            'thumbnail' => 'thumbnails/default-tumbnail-idea.png',
            'title' => '<p>Distribusi Penggunaan Teknologi Microgrid Teknologi Self-Healing Grid</p>',
            'background' => '<p>Distribusi PLN Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. belakang</p>',
            'purpose' => '<p>Distribusi PLN is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>',
            'solution' => '<p?>Distribusi PLN Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>',
            'team' => 'Naufal Fakhrian, Alex marchel, John Doe, Andrea Galaxy, Seilal Farah',
            'status' => 'ide',
            'attachment' => ['attachments/attachment-icon.png', 'attachments/attachment-icon.png', 'attachments/attachment-icon.png'],
            'total_views' => 0,
            'total_comments' => 0,
            'created_at' => '2024-02-15 14:07:53'
        ]);
        Idea::create([
            'user_id' => 2,
            'thumbnail' => 'thumbnails/default-tumbnail-idea.png',
            'title' => '<p>Penggunaan Teknologi Microgrid Peningkatan Keandalan Jaringan Distribusi PLN dengan Menggunakan Teknologi Self-Healing Grid</p>',
            'background' => '<p>Distribusi PLN Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. belakang</p>',
            'purpose' => '<p>Distribusi PLN is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>',
            'solution' => '<p?>Distribusi PLN Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>',
            'team' => 'Naufal Fakhrian, Alex marchel, John Doe, Andrea Galaxy, Seilal Farah',
            'status' => 'ide',
            'attachment' => ['attachments/attachment-icon.png', 'attachments/attachment-icon.png', 'attachments/attachment-icon.png'],
            'total_views' => 0,
            'total_comments' => 0,
            'created_at' => '2024-02-19 14:07:53'
        ]);
    }
}
