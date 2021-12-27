@extends('layouts.app')

@section('content')
<div class="container mx-auto my-auto px-8">
    <nav class="mt-5 p-5 flex justify-between items-center space-x-4">
        <h1 class="inline-block font-bold text-lg leading-6">Profil Mahasiswa</h1>
        <h1 class="inline-block font-bold text-lg leading-6">Kelas <span class="button-primary">B</span></h1>
    </nav>
    <div class="grid grid-cols-1 md:grid-cols-3 md:grid-rows-1 gap-4 mt-5">
        <div class="card-primary text-center group border-b-4 border-b-violet-500">
            <i class="fas fa-circle fa-8x text-violet-500 group-hover:text-white"></i>
            <h1 class="group-hover:text-white my-5 font-bold text-lg leading-6">{{ $mahasiswa->nama }}</h1>
            <p class="group-hover:text-white" id="nim">{{ $mahasiswa->nim }}</p>
        </div>
        <div class="card-primary group border-b-4 border-b-violet-500">
            <h1 class="leading-6 font-semibold text-center text-lg group-hover:text-white">Detail</h1>
            <div class="flex flex-col space-y-4 mt-5">
                <div>
                    <label for="telp" class="label-primary group-hover:text-white">Tanggal Lahir</label>
                    <input type="date" readonly name="telp" class="input-primary"
                        value="{{ $mahasiswa->tanggal_lahir }}">
                </div>
                <div>
                    <label for="address" class="label-primary group-hover:text-white">Alamat</label>
                    <textarea type="text" readonly name="address" rows="2"
                        class="input-primary resize-none">{{ $mahasiswa->alamat }}</textarea>
                </div>
            </div>
        </div>
        <div class="card-primary group border-b-4 border-b-violet-500">
            <h1 class="leading-6 font-semibold text-center text-lg group-hover:text-white">Kontak</h1>
            <div class="flex flex-col space-y-4 mt-5">
                <div>
                    <label for="email" class="label-primary group-hover:text-white">Email</label>
                    <input type="text" readonly name="email" class="input-primary" value="{{ $mahasiswa->email }}">
                </div>
                <div>
                    <label for="telp" class="label-primary group-hover:text-white">Nomor Telepon</label>
                    <input type="text" readonly name="telp" class="input-primary" value="{{ $mahasiswa->no_telp }}">
                </div>
            </div>
        </div>
    </div>
    <nav class="shadow mt-5 p-5 flex-col md:flex-row flex items-center space-x-4">
        <div class="flex-grow">
            <button id="grade" class="button-primary inline-block">Grade</button>
        </div>
        <button id="lihat-nilai" class="button-primary inline-block">Lihat Nilai</button>
        <button id="tambah-nilai" class="button-primary inline-block">Tambah Nilai</button>
    </nav>
</div>


@include('components.modal-tambah-nilai')
@include('components.modal-lihat-nilai')
@include('components.modal-alert')

@endsection

@push('scripts')
<script>
    document.getElementById('tambah-nilai').addEventListener('click', () => {
        openModalTambahNilai()
    })

    document.getElementById('lihat-nilai').addEventListener('click', () => {
        const nim = document.getElementById('nim').innerText
        openModalLihatNilai(nim)
    })
</script>
@endpush
