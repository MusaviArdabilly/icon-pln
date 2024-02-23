<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FlowPosition;

class FlowPositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FlowPosition::create([
            'name' => 'Problem'
        ]);
        FlowPosition::create([
            'name' => 'Design'
        ]);
        FlowPosition::create([
            'name' => 'Prototype'
        ]);
        FlowPosition::create([
            'name' => 'Evaluation'
        ]);
        FlowPosition::create([
            'name' => 'Report'
        ]);
    }
}
