
<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    <div class="row justify-content-center">
        <div class="col-lg-7">

            <div class="card bg-dark text-white border-secondary">
                <div class="card-body p-4">

                    <h4 class="fw-bold mb-4">Tambah Tugas Kuliah</h4>

                    <form method="POST" action="{{ route('taskrecording.store') }}">
                        @csrf

                        {{-- Nama --}}
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text"
                                class="form-control text-white bg-dark @error('name') is-invalid @enderror"
                                id="name" name="name" value="{{ old('name') }}">

                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- NIM --}}
                        <div class="mb-3">
                            <label for="nim" class="form-label">NIM</label>
                            <input type="text"
                                class="form-control text-white bg-dark @error('nim') is-invalid @enderror"
                                id="nim" name="nim" value="{{ old('nim') }}">

                            @error('nim')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Nama Tugas --}}
                        <div class="mb-3">
                            <label for="nama_tugas" class="form-label">Nama Tugas</label>
                            <input type="text"
                                class="form-control text-white bg-dark @error('nama_tugas') is-invalid @enderror"
                                id="nama_tugas" name="nama_tugas" value="{{ old('nama_tugas') }}">

                            @error('nama_tugas')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Mata Kuliah --}}
                        <div class="mb-3">
                            <label for="mata_kuliah" class="form-label">Mata Kuliah</label>
                            <input type="text"
                                class="form-control text-white bg-dark @error('mata_kuliah') is-invalid @enderror"
                                id="mata_kuliah" name="mata_kuliah" value="{{ old('mata_kuliah') }}">

                            @error('mata_kuliah')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Deadline --}}
                        <div class="mb-3">
                            <label for="deadline" class="form-label">Deadline</label>
                            <input type="date"
                                class="form-control text-white bg-dark @error('deadline') is-invalid @enderror"
                                id="deadline" name="deadline" value="{{ old('deadline') }}">

                            @error('deadline')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Status --}}
                        <div class="mb-4">
                            <label for="status" class="form-label">Status</label>
                            <select
                                class="form-select text-white bg-dark @error('status') is-invalid @enderror"
                                id="status" name="status">

                                <option value="">Pilih Status</option>
                                <option value="Belum Selesai" {{ old('status') == 'Belum Selesai' ? 'selected' : '' }}>Belum Selesai</option>
                                <option value="Proses" {{ old('status') == 'Proses' ? 'selected' : '' }}>Proses</option>
                                <option value="Selesai" {{ old('status') == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                            </select>

                            @error('status')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Tombol --}}
                        <div class="d-flex justify-content-end gap-2">
                            <a class="btn btn-danger rounded px-4"
                                href="{{ route('taskrecording.index') }}">
                                Cancel
                            </a>

                            <button type="submit" class="btn btn-success rounded px-4">
                                Submit
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

</x-app>
