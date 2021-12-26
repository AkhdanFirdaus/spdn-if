@extends('layouts.app')

@push('styles')
@endpush

@section('content')
<div class="w-full h-full md:h-screen">
    <div class="md:h-1/3 p-10 md:p-20">
        <h1 class="font-bold text-4xl leading-8">Daftar Mahasiswa</h1>
        <p class="leading-8 my-5">Lihat Daftar Mahasiswa</p>
    </div>
    <div class="p-10 md:p-20 bg-violet-500 bg-opacity-30">
        <table class="table-fixed w-full">
            <thead>
                <tr>
                    <th>#</th>
                    <th>NIM</th>
                    <th>Nama</th>
                </tr>
            </thead>
            <tbody id="table-mahasiswa"></tbody>
        </table>
    </div>
</div>
@endsection

@push('scripts')
<script>
    const card = (index, data) => {
        return `<tr>
            <td>${index}</td>
            <td>${data.nim}</td>
            <td>${data.nama}</td>
        </tr>`
    }

    axios.get('/api/mahasiswa').then((result) => {
        let html = ''

        let i = 1
        result.data.data.forEach((element) => {
            html += card(i++, element)
        })

        document.getElementById('table-mahasiswa').innerHTML = html
    }).catch((err) => {
        alert('Error euy')
    })
</script>
@endpush