<x-app>

    <x-slot:title>{{ $title }}</x-slot>
    
    <h2 class=" fw-bold text-white text-center mb-4">
        Daftar Tugas Kuliah
    </h2>
    <h4 class="text-white text-center mb-4">
        Catat, pantau, dan selesaikan setiap tugas tepat waktu.
    </h4>

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
            <td>{{ $taskrecording->status }}</td>
            <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</x-app>