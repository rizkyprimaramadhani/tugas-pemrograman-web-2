<x-app>

    <x-slot:title>{{ $title }}</x-slot>
    
    @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession
    
    <h2 class=" fw-bold text-white text-center mb-2">
        Daftar Tugas Kuliah
    </h2>
    <p class="text-white text-center mb-4">
        Catat, pantau, dan selesaikan setiap tugas tepat waktu.
    </p>
    
        {{-- Tombol Tambah Tugas --}}
    <div class="d-flex justify-content-end mb-3">
        <a class="btn btn-danger rounded-pill px-4"
        href="{{ route('taskrecording.create') }}" role="button">+ Tambah Tugas</a>
    </div>

        {{-- Summary Cards --}}
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-3 mb-4">

        {{-- Total Tugas --}}
        <div class="col">
            <div class="card bg-dark text-white border-info h-100">
                <div class="card-body">
                    <h6 class="text-info">Total Tugas</h6>
                    <h2 class="fw-bold">{{ $totalTugas }}</h2>
                    <small class="text-secondary">Seluruh tugas kuliah</small>
                </div>
            </div>
        </div>

        {{-- Belum Selesai --}}
        <div class="col">
            <div class="card bg-dark text-white border-danger h-100">
                <div class="card-body">
                    <h6 class="text-danger">Belum Selesai</h6>
                    <h2 class="fw-bold">{{ $belumSelesai }}</h2>
                    <small class="text-secondary">Tugas belum dikerjakan</small>
                </div>
            </div>
        </div>

        {{-- Proses --}}
        <div class="col">
            <div class="card bg-dark text-white border-warning h-100">
                <div class="card-body">
                    <h6 class="text-warning">Dalam Proses</h6>
                    <h2 class="fw-bold">{{ $proses }}</h2>
                    <small class="text-secondary">Tugas sedang dikerjakan</small>
                </div>
            </div>
        </div>

        {{-- Selesai --}}
        <div class="col">
            <div class="card bg-dark text-white border-success h-100">
                <div class="card-body">
                    <h6 class="text-success">Selesai</h6>
                    <h2 class="fw-bold">{{ $selesai }}</h2>
                    <small class="text-secondary">Tugas telah diselesaikan</small>
                </div>
            </div>
        </div>

    </div>

    <table class="table table-bordered table-dark table-hover">
        <thead class="text-center">
            <tr class="table-dark">
                <th scope="col">No.</th>
                <th scope="col">Nama</th>
                <th scope="col">Nim</th>
                <th scope="col">Nama Tugas</th>
                <th scope="col">Mata Kuliah</th>
                <th scope="col">Deadline</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody class="table-dark">
            @foreach ($taskrecordings as $taskrecording)
            <tr class="bg-dark text-white">
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $taskrecording->name }}</td>
            <td>{{ $taskrecording->nim }}</td>
            <td>{{ $taskrecording->nama_tugas }}</td>
            <td>{{ $taskrecording->mata_kuliah }}</td>
            <td>{{ $taskrecording->deadline }}</td>
            <td class="text-center">
                @if ($taskrecording->status == 'Belum Selesai')
                    <span class="badge rounded-pill bg-danger">
                        Belum Selesai
                    </span>

                @elseif ($taskrecording->status == 'Proses')
                    <span class="badge rounded-pill bg-warning text-dark">
                        Proses
                    </span>

                @else
                    <span class="badge rounded-pill bg-success">
                        Selesai
                    </span>
                @endif
            </td>
            <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</x-app>