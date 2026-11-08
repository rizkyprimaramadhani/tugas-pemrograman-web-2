<?php

namespace Database\Factories;

use App\Models\Taskrecording;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Taskrecording>
 */
class TaskrecordingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'nim' => fake()->numerify('###########'),
            'nama_tugas' => fake()->sentence(4),
            'mata_kuliah' => fake()->randomElement([
                'Pemrograman Web 2',
                'Jaringan Komputer',
                'Sistem Kontrol Mikroprocessor',
                'Interaksi Manusia dan Komputer',
                'Aljabar Linear',
                'Komputer Grafis',
                'Bahasa Inggris 3',
                'Analisis dan Perancangan Sistem',
                'Kecerdasan Buatan',
                'Statistika',
            ]),
            'deadline' => fake()->dateTimeBetween(
                'now',
                '+30 days'
            )->format('Y-m-d'),
            'status' => fake()->randomElement([
                'Belum Selesai',
                'Proses',
                'Selesai',
            ]),
        ];
    }
}