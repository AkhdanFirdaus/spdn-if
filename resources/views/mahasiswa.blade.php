@extends('layouts.app')

@section('content')
<div class="flex flex-col md:flex-row h-screen">
    <div class="flex-1 bg-violet-500">
        <div class="min-h-screen grid place-items-center">
            <div class="w-full px-8 max-w-md mx-auto">
                <div class="grid grid-rows-2 gap-4">
                    <div class="rounded p-5 shadow backdrop-blur-0 bg-white">
                        <ul>
                            <li>Nama = {{ $mahasiswa->nama }}</li>
                            <li>NIM = {{ $mahasiswa->nim }}</li>
                            <li>Email = {{ $mahasiswa->email }}</li>
                            <li>Telp = {{ $mahasiswa->no_telp }}</li>
                            <li>Alamat = {{ $mahasiswa->alamat }}</li>
                        </ul>
                        <button id="modal-open" class="button-primary">Open Modal</button>
                    </div>
                    <div class="rounded p-5 shadow bg-blue-400 invisible" id="detail-mk">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex-1">
        <div class="min-h-screen grid place-items-center">
            <div class="w-full px-8 max-w-md mx-auto">
                <form class="space-y-8 accent-violet-500" id="form-nilai">
                    @csrf
                    <input type="hidden" name="mahasiswa" value="{{ $mahasiswa->id }}">
                    <div>
                        <h1 class="text-2xl font-bold leading-6 text-center">Form Nilai</h1>
                    </div>
                    <div>
                        <label for="mata_kuliah" class="label-primary">Mata
                            Kuliah</label>
                        <select name="mata_kuliah" class="input-primary" id="mata_kuliah"></select>
                    </div>
                    <div>
                        <label for="tugas" class="label-primary">Tugas</label>
                        <input type="number" min="0" max="100" name="tugas" class="input-primary" placeholder="0-100">
                    </div>
                    <div>
                        <label for="UTS" class="label-primary">UTS</label>
                        <input type="number" min="0" max="100" name="uts" class="input-primary" placeholder="0-100">
                    </div>
                    <div>
                        <label for="UAS" class="label-primary">UAS</label>
                        <input type="number" min="0" max="100" name="uas" class="input-primary" placeholder="0-100">
                    </div>
                    <div class="flex justify-end">
                        <button class="button-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@include('components.modal')
@endsection

@push('scripts')
<script>
    const select = document.getElementById('mata_kuliah')
    const detailMK = document.getElementById('detail-mk')

    axios.get('/api/mata-kuliah').then((result) => {
        let html = '<option value="-1">Pilih Matakuliah</option>'
        console.log(result.data.message)

        result.data.data.forEach((data) => {
            html += `<option value="${data.id}">${data.nama}</option>`
        })

        select.innerHTML = html

    }).catch((err) => {
        alert('Error', err)
    })

    select.addEventListener('change', () => {
        console.log(select.value)

        if (select.value != -1) {
            axios.get('/api/mata-kuliah/' + select.value).then((result) => {
                const data = result.data.data
                detailMK.classList.remove('invisible')
                detailMK.innerHTML = `<div class="transition duration-300 ease-in">
                    <h1>${data.nama}</h1>
                    <p>Jumlah SKS = ${data.sks}</p>
                    <p>Semester = ${data.semester}</p>
                </div>`
            }).catch((error) => {
                alert('error', error)
            })
        } else {
            detailMK.classList.add('invisible')
            detailMK.innerHTML = ''
        }

    })

    const form = document.getElementById('form-nilai')

    form.addEventListener('submit', (e) => {
        e.preventDefault()

        const formData = new FormData(e.target)

        axios.post('/api/nilai', formData).then((result) => {
            console.log(result.data.message)
            openModalSuccess(result.data.message)
        }).catch((err) => {
            console.log(err)
        })
    })
</script>
@endpush
