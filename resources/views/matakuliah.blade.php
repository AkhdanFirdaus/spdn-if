@extends('layouts.app')

@push('styles')
@endpush

@section('content')
<div class="w-full h-full md:h-screen">
    <div class="md:h-1/3 p-10 md:p-20">
        <h1 class="font-bold text-4xl leading-8">Daftar Mata Kuliah</h1>
        <p class="leading-8 my-5">Lihat Daftar Mata Kuliah</p>
    </div>
    <div class="p-10 md:p-20 bg-violet-500 bg-opacity-30">
        <div class="grid grid-cols-1 md:grid-cols-3 grid-flow-row gap-4" id="grid-mk"></div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    const card = (data) => {
        return `<a href="mata-kuliah" class="card-primary text-center group space-y-3">
            <h1 class="font-bold text-violet-500 group-hover:text-white">${data.nama}</h1>
            <div>
                <label class="text-violet-500 group-hover:text-white">SKS</label>
                <p class="text-violet-500 group-hover:text-white">${data.sks}</p>
            </div>
            <div>
                <label class="text-violet-500 group-hover:text-white">Semester</label>
                <p class="text-violet-500 group-hover:text-white">${data.semester}</p>
            </div>
        </a>`
    }

    axios.get('/api/mata-kuliah').then((result) => {
        let html = ''

        result.data.data.forEach((element) => {
            html += card(element)
        })

        document.getElementById('grid-mk').innerHTML = html
    }).catch((err) => {
        alert('Error euy')
    })
</script>
@endpush