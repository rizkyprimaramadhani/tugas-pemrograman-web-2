<?php

namespace App\Http\Controllers;

use App\Models\Taskrecording;
use Illuminate\Http\Request;

class TaskrecordingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Menghitung jumlah tugas

        $totalTugas = Taskrecording::count();
        $belumSelesai = Taskrecording::where('status', 'Belum Selesai')->count();
        $proses = Taskrecording::where('status', 'Proses')->count();
        $selesai = Taskrecording::where('status', 'Selesai')->count();

        return view('taskrecording.index', [
            'title' => 'Task Recording',
            'taskrecordings' => Taskrecording::all(),
            'totalTugas' => $totalTugas,
            'belumSelesai' => $belumSelesai,
            'proses' => $proses,
            'selesai' => $selesai,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('taskrecording.create', ['title' => 'Create Task Recording']);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'nim' => ['required', 'numeric', 'digits:11'],
            'nama_tugas' => ['required', 'string', 'max:255'],
            'mata_kuliah' => ['required', 'string', 'max:255'],
            'deadline' => ['required', 'date'],
            'status' => ['required', 'in:Belum Selesai,Proses,Selesai'],
        ], [
            'name.required' => 'Nama tidak boleh kosong',
            'name.max' => 'Nama tidak boleh lebih dari :max karakter',
            'nim.required' => 'NIM tidak boleh kosong',
            'nim.digits' => 'NIM wajib :digits digit',
            'nim.numeric' => 'NIM wajib angka',
            'nama_tugas.required' => 'Nama tugas tidak boleh kosong',
            'mata_kuliah.required' => 'Mata kuliah tidak boleh kosong',
            'deadline.required' => 'Deadline tidak boleh kosong',
            'deadline.date' => 'Format deadline tidak valid',
            'status.required' => 'Status tugas wajib dipilih',
            'status.in' => 'Status tugas tidak valid',
        ]);

        Taskrecording::create($validated);
        return to_route('taskrecording.index')->withSuccess('Data berhasil ditambahkan'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Taskrecording $taskrecording)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Taskrecording $taskrecording)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Taskrecording $taskrecording)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Taskrecording $taskrecording)
    {
        //
    }
}