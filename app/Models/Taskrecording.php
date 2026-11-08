<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
            'name', 
            'nim',
            'nama_tugas',
            'mata_kuliah',
            'deadline',
            'status'
            ])]
class Taskrecording extends Model
{
    /** @use HasFactory<\Database\Factories\TaskrecordingFactory> */
    use HasFactory;

    // protected $fillable = ['name', 'nim'];

    // protected $guarded = ['id'];
}