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
        // Menentukan mata kuliah secara acak
        $mata_kuliah = fake()->randomElement([
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
            ]);

        // Menentukan nama tugas berdasarkan mata kuliah
        $nama_tugas = match ($mata_kuliah) {
            'Pemrograman Web 2' => fake()->randomElement([
                'Membuat Aplikasi CRUD Laravel',
                'Membuat Program Perulangan PHP',
                'Membuat Halaman Formulir',
            ]),
        
            'Jaringan Komputer' => fake()->randomElement([
            'Menganalisis Topologi Jaringan',
            'Membuat Konfigurasi IP Address',
            'Mempelajari Model OSI',
            ]),

            'Sistem Kontrol Mikroprocessor' => fake()->randomElement([
                'Membuat Rangkaian Kontrol LED',
                'Menganalisis Sistem Mikroprocessor',
                'Membuat Program Kontrol Sensor',
            ]),

            'Interaksi Manusia dan Komputer' => fake()->randomElement([
                'Merancang Antarmuka Pengguna',
                'Membuat Prototype Aplikasi',
                'Menganalisis Pengalaman Pengguna',
            ]),

            'Aljabar Linear' => fake()->randomElement([
                'Menyelesaikan Operasi Matriks',
                'Menyelesaikan Sistem Persamaan Linear',
                'Menghitung Determinan Matriks',
            ]),

            'Komputer Grafis' => fake()->randomElement([
                'Membuat Desain Poster Digital',
                'Membuat Ilustrasi Digital',
                'Menganalisis Komposisi Warna',
            ]),

            'Bahasa Inggris 3' => fake()->randomElement([
                'Menyusun Dialog Bahasa Inggris',
                'Membuat Teks Presentasi Bahasa Inggris',
                'Menyusun Paragraf Bahasa Inggris',
            ]),

            'Analisis dan Perancangan Sistem' => fake()->randomElement([
                'Membuat Diagram Use Case',
                'Membuat Entity Relationship Diagram',
                'Menganalisis Kebutuhan Sistem',
            ]),

            'Kecerdasan Buatan' => fake()->randomElement([
                'Menganalisis Algoritma Hill Climbing',
                'Membuat Program Pencarian Solusi',
                'Mempelajari Algoritma Pencarian',
            ]),

            'Statistika' => fake()->randomElement([
                'Menganalisis Data Statistik',
                'Menghitung Distribusi Frekuensi',
                'Membuat Diagram Penyajian Data',
            ]),
        };

        return [
            'name' => fake()->name(),
            'nim' => fake()->numerify('20251105###'),
            'nama_tugas' => $nama_tugas,
            'mata_kuliah' => $mata_kuliah,
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