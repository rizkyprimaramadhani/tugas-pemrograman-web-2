<?php

namespace Database\Seeders;

use App\Models\Taskrecording;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskrecordingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Taskrecording::factory()->count(100)->create();    
    }
}