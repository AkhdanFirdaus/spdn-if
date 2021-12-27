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
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <table class="table-auto min-w-full divide-y divide-gray-200" id="table-test">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NIM
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kelas
                        </th>
                        <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200" id="table-mahasiswa"></tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    const card = (index, data) => {
        return `<tr>
            <td class="px-6 py-4 whitespace-nowrap">${index}</td>
            <td class="px-6 py-4 whitespace-nowrap">${data.nim}</td>
            <td class="px-6 py-4 whitespace-nowrap">${data.nama}</td>
            <td class="px-6 py-4 whitespace-nowrap">${data.kelas}</td>
            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <a href="/mahasiswa/${data.nim}" class="text-indigo-600 hover:text-indigo-900">Detail</a>
            </td>
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
