@extends('layouts.app')

@push('styles')
<style>
    #jumbotron {
        background-image: url('/imgs/study.jpg');
        background-size: cover;
        background-position: center center;
    }
</style>
@endpush

@section('content')
<div class="w-full h-full md:h-screen">
    <div class="md:h-1/2 p-10 md:p-20">
        <div class="grid grid-cols-1 grid-rows-1 md:grid-cols-2 md:grid-rows-1">
            <div class="p-5">
                <h1 class="font-bold text-4xl leading-8">Cari Data Mahasiswa</h1>
                <p class="leading-8 my-5">Cari data berdasarkan nim mahasiswa</p>
            </div>
            <div class="p-5 text-right">
                <a href="https://github.com/akhdanfirdaus/spdn-if" target="_blank"
                    class="inline-block m-2 button-secondary">
                    <i class="fas fa-code md:text-lg mr-2"></i> View Source Code
                </a>
                <a href="https://drive.google.com/drive/folders/1kiJZf2pX8SN9QAECdIHlWpXiylnMJqIL?usp=sharing"
                    target="_blank" class="inline-block m-2 button-primary">
                    <i class="fas fa-file md:text-lg mr-2"></i> View Doc
                </a>
            </div>
        </div>
    </div>
    <div class="md:absolute md:inset-y-1/3 md:mt-8 md:inset-x-1/4 w-full md:w-1/2">
        <div
            class="p-5 md:p-10 shadow border-gray-300 border-1 border-b-4 border-b-violet-500 rounded-md bg-white hover:shadow-lg">
            <form id="mahasiswa-form">
                <div class="flex flex-row space-x-2">
                    <input type="text" class="input-primary flex-1" placeholder="Cari Mahasiswa" id="mhs-field">
                    <button type="submit" class="button-primary flex-grow-0">Cari</button>
                </div>
            </form>
        </div>
    </div>
    <div id="jumbotron" class="card-content-center md:h-1/2 p-10 md:p-20 bg-violet-500 bg-opacity-30">
        <div class="grid grid-rows-3 md:grid-rows-1 grid-cols-1 md:grid-cols-3 gap-4">
            <a href="mata-kuliah" class="card-primary card-content-center group flex flex-col space-y-5">
                <span class="fa-stack block">
                    <i class="fas fa-circle fa-stack-2x text-violet-500 group-hover:text-white"></i>
                    <i class="fas fa-book fa-stack-1x fa-inverse group-hover:text-violet-500"></i>
                </span>
                <h1 class="font-semibold text-violet-500 group-hover:text-white">Lihat Daftar Mata Kuliah</h1>
            </a>
            <a href="/mahasiswa" class="card-primary card-content-center group flex flex-col space-y-5">
                <span class="fa-stack block">
                    <i class="fas fa-circle fa-stack-2x text-violet-500 group-hover:text-white"></i>
                    <i class="fas fa-user fa-stack-1x fa-inverse group-hover:text-violet-500"></i>
                </span>
                <h1 class="font-semibold text-violet-500 group-hover:text-white">Lihat Daftar Mahasiswa</h1>
            </a>
            <a href="/info" class="card-primary card-content-center group flex flex-col space-y-5">
                <span class="fa-stack block">
                    <i class="fas fa-circle fa-stack-2x text-violet-500 group-hover:text-white"></i>
                    <i class="fas fa-info fa-stack-1x fa-inverse group-hover:text-violet-500"></i>
                </span>
                <h1 class="font-semibold text-violet-500 group-hover:text-white">Lihat Info</h1>
            </a>
        </div>
    </div>
</div>

@include('components.modal-detail')

@endsection

@push('scripts')
<script>
    document.getElementById('mahasiswa-form').addEventListener('submit', (e) => {
        e.preventDefault()
        const value = document.getElementById('mhs-field').value

        axios.get('/api/mahasiswa/' + value).then((result) => {
            console.log(result)

            const data = result.data.data
            const content = `<div>
                <h1 class="font-bold text-xl">${data.nama}</h1>
                <p>${data.nim}</p>
            </div>`

            openModalDetail(result.data.message, content, '/mahasiswa/' + data.nim)

        }).catch((err) => {
            openModalDetailFailed('<div>Mahasiswa tidak ditemukan</div>')
        })
    })
</script>
@endpush