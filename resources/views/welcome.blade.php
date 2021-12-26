@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <div class="grid grid-rows-2 sm:grid-cols-2 gap-4">
        <div class="shadow bg-amber-200 p-5">
            <h1 class="text-lg">Cari Data Mahasiswa</h1>
            <div class="my-5"></div>
            <form id="mahasiswa-form">
                <div class="flex flex-row space-x-2">
                    <input type="text" class="px-3 py-2 shadow-sm flex-1" placeholder="Cari Mahasiswa" id="mhs-field">
                    <button type="submit"
                        class="px-4 py-2 text-amber-500 border-amber-500 border-2 rounded">Cari</button>
                </div>
            </form>
        </div>
        <div class="shadow bg-amber-200 p-5">
            <div id="hasil-detail">
                Detail Mahasiswa
            </div>
            <a href="" class="bg-amber-500 px-4 py-2 rounded focus:shadow text-white">Lihat Detail</a>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    window.onload = function() {

        const display = document.getElementById('hasil-detail')

        display.addEventListener('mouseover', () => {
            console.log("terhover")
        })

        document.getElementById('mahasiswa-form').addEventListener('submit', (e) => {
            e.preventDefault()
            const value = document.getElementById('mhs-field').value

            axios.get('api/mahasiswa/' + value).then((result) => {
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

            }).catch((err) => {
                display.innerHTML = '<div>Mahasiswa tidak ditemukan</div>'
            })
        })
    }
</script>
@endsection
