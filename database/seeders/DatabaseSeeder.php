<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Idea;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Developer LOD',
            'role' => 'admin',
            'email' => 'dev@lodagency.co.id',
            'password' => bcrypt('password')
        ]);
        User::create([
            'name' => 'Naufal Fakhrian',
            'role' => 'user',
            'email' => 'naufal@gmail.com',
            'password' => bcrypt('password')
        ]);
        Idea::create([
            'thumbnail' => 'default.png',
            'title' => 'Pemanfaatan Internet of Things (IoT) dalam Meningkatkan Efisiensi Operasional',
            // 'abstract' => 'Ini adalah abstasksi Pemanfaatan Internet of Things (IoT)',
            'background' => 'Ini adalah latar belakang Pemanfaatan Internet of Things (IoT)',
            'content' => 'Ini adalah isi Pemanfaatan Internet of Things (IoT)',
            'solution' => 'Ini adalah solusi Pemanfaatan Internet of Things (IoT)',
            'team' => 'Musavi Ardabilly, John Petruci, John Doe, Andrea Galaxy, Seilal Farah',
            'status' => 'ide',
            'attachment' => ['Blueprint.png', 'Diagram.png', 'Bundle.pdf'],
            'total_views' => 0,
            'total_comments' => 0,
        ]);
        Idea::create([
            'thumbnail' => 'default.png',
            'title' => 'Strategi Penerapan Teknologi Hybrid Power System pada PLN untuk Meningkatkan Ketersediaan Energi Listrik',
            // 'abstract' => 'Hybrid Power System pada PLN Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
            'background' => 'LHybrid Power System pada PLN orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. belakang',
            'content' => 'Hybrid Power System pada PLN Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
            'solution' => 'Hybrid Power System pada PLN Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
            'team' => 'Dani Alfaza, James Bond, John Doe, Andrea Galaxy, Seilal Farah',
            'status' => 'ide',
            'attachment' => ['Flow Diagram.png', 'Prototype1.png', 'Prototype2.png'],
            'total_views' => 0,
            'total_comments' => 0,
        ]);
        Idea::create([
            'thumbnail' => 'default.png',
            'title' => 'Analisis Dampak Penggunaan Teknologi Microgrid terhadap Keberlanjutan Energi di Lingkungan PLN',
            // 'abstract' => 'Teknologi Microgrid Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
            'background' => 'Teknologi Microgrid Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. belakang',
            'content' => 'Teknologi Microgrid Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
            'solution' => 'Teknologi Microgrid Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
            'team' => 'Naufal Fakhrian, Marteen Bruelee, John Doe, Andrea Galaxy, Seilal Farah',
            'status' => 'ide',
            'attachment' => ['Flow Diagram.png', 'Prototype1.png', 'Prototype2.png'],
            'total_views' => 0,
            'total_comments' => 0,
        ]);
        Idea::create([
            'thumbnail' => 'default.png',
            'title' => 'Peningkatan Keandalan Jaringan Distribusi PLN dengan Menggunakan Teknologi Self-Healing Grid',
            // 'abstract' => 'Distribusi PLN Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
            'background' => 'Distribusi PLN Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. belakang',
            'content' => 'Distribusi PLN is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
            'solution' => 'Distribusi PLN Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
            'team' => 'Bagas Afnan, Alex marchel, John Doe, Andrea Galaxy, Seilal Farah',
            'status' => 'ide',
            'attachment' => ['Flow Diagram.png', 'Prototype1.png', 'Prototype2.png'],
            'total_views' => 0,
            'total_comments' => 0,
        ]);
        Idea::create([
            'thumbnail' => 'default.png',
            'title' => 'Peningkatan Distribusi PLN dengan Menggunakan Teknologi Self-Healing Grid',
            // 'abstract' => 'Distribusi PLN Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
            'background' => 'Distribusi PLN Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. belakang',
            'content' => 'Distribusi PLN is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
            'solution' => 'Distribusi PLN Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
            'team' => 'Bagas Afnan, Alex marchel, John Doe, Andrea Galaxy, Seilal Farah',
            'status' => 'inovasi',
            'attachment' => ['Flow Diagram.png', 'Prototype1.png', 'Prototype2.png'],
            'total_views' => 0,
            'total_comments' => 0,
        ]);
        Idea::create([
            'thumbnail' => 'default.png',
            'title' => 'Distribusi Penggunaan Teknologi Microgrid Teknologi Self-Healing Grid',
            // 'abstract' => 'Distribusi PLN Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
            'background' => 'Distribusi PLN Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. belakang',
            'content' => 'Distribusi PLN is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
            'solution' => 'Distribusi PLN Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
            'team' => 'Bagas Afnan, Alex marchel, John Doe, Andrea Galaxy, Seilal Farah',
            'status' => 'inovasi',
            'attachment' => ['Flow Diagram.png', 'Prototype1.png', 'Prototype2.png'],
            'total_views' => 0,
            'total_comments' => 0,
        ]);
        Idea::create([
            'thumbnail' => 'default.png',
            'title' => 'Penggunaan Teknologi Microgrid Peningkatan Keandalan Jaringan Distribusi PLN dengan Menggunakan Teknologi Self-Healing Grid',
            // 'abstract' => 'Distribusi PLN Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
            'background' => 'Distribusi PLN Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. belakang',
            'content' => 'Distribusi PLN is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
            'solution' => 'Distribusi PLN Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
            'team' => 'Bagas Afnan, Alex marchel, John Doe, Andrea Galaxy, Seilal Farah',
            'status' => 'inovoasi',
            'attachment' => ['Flow Diagram.png', 'Prototype1.png', 'Prototype2.png'],
            'total_views' => 0,
            'total_comments' => 0,
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
