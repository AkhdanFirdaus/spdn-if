@extends('layouts.app')

@section('content')
<div class="min-h-screen grid place-items-center">
    <div class="w-full px-8 max-w-md mx-auto">
        <div class="flex flex-col">
            <div class="flex-1">
                <div class="shadow bg-amber-200 p-5 min-h-full space-y-5">
                    <h1 class="text-lg">Cari Data Mahasiswa</h1>
                    <div class="my-5"></div>
                    <form id="mahasiswa-form">
                        <div class="flex flex-row space-x-2">
                            <input type="text" class="px-3 py-2 shadow-sm flex-1" placeholder="Cari Mahasiswa"
                                id="mhs-field">
                            <button type="submit"
                                class="px-4 py-2 text-amber-500 border-amber-500 border-2 rounded">Cari</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="flex-1">
                <div class="shadow bg-amber-200 p-5 min-h-full space-y-5">
                    <div id="hasil-detail" class="block">
                        Detail Mahasiswa
                    </div>
                    <a href="" id="lihat-mahasiswa"
                        class="inline-block bg-amber-500 px-4 py-2 rounded focus:shadow text-white">Lihat
                        Detail</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    window.onload = function() {

        const formCari = document.getElementById('mahasiswa-form')
        const display = document.getElementById('hasil-detail')
        const lihatMahasiswa = document.getElementById('lihat-mahasiswa')

        formCari.addEventListener('submit', (e) => {
            e.preventDefault()
            const value = document.getElementById('mhs-field').value

            axios.get('/api/mahasiswa/' + value).then((result) => {
                console.log(result)

                const data = result.data.data
                display.innerHTML = `<div>
                    <ul>
                        <li>${data.nama}</li>
                        <li>${data.nim}</li>
                        <li>${data.email}</li>
                        <li>${data.alamat}</li>
                        <li>${data.no_telp}</li>
                    </ul>
                </div>`

                lihatMahasiswa.href = '/mahasiswa/' + data.nim

            }).catch((err) => {
                display.innerHTML = '<div>Mahasiswa tidak ditemukan</div>'
            })
        })
    }
</script>
@endpush
