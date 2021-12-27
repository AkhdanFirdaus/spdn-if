<div id="modal-tambah-nilai"
    class="fixed invisible inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto min-h-screen grid place-items-center">
    <div class="relative p-6 w-8/12 shadow-lg rounded-md bg-white">
        <div class="grid place-items-center">
            <div class="w-full px-10 mx-auto">
                <form class="space-y-6 accent-violet-500" id="form-nilai">
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
                    <div class="grid grid-cols-2 grid-rows-1 gap-4">
                        <div>
                            <label for="semester" class="label-primary">Semester</label>
                            <input readonly id="mk-semester" type="number" name="semester" class="input-primary"
                                placeholder="Mata Kuliah tersedia di semester">
                        </div>
                        <div>
                            <label for="tugas" class="label-primary">SKS</label>
                            <input readonly id="mk-sks" type="number" name="tugas" class="input-primary"
                                placeholder="Jumlah SKS yang dapat diambil">
                        </div>
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
                    <div class="flex justify-end space-x-4">
                        <button class="button-secondary" type="button" id="modal-cancel-tambah-nilai">Cancel</button>
                        <button class="button-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    const modalTambahNilai = document.getElementById('modal-tambah-nilai')
    const modalCancelTambahNilai = document.getElementById('modal-cancel-tambah-nilai')
    const select = document.getElementById('mata_kuliah')
    const form = document.getElementById('form-nilai')
    const mkSemester = document.getElementById('mk-semester')
    const mkSKS = document.getElementById('mk-sks')

    modalCancelTambahNilai.addEventListener('click', () => {
        closeModalTambahNilai()
    })

    function openModalTambahNilai() {
        modalTambahNilai.classList.remove('invisible')
    }

    function closeModalTambahNilai() {
        modalTambahNilai.classList.add('invisible')
    }

    window.addEventListener('click', (e) => {
        if (e.target == modalTambahNilai) {
            closeModalTambahNilai()
        }
    })

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
                mkSemester.value = data.semester
                mkSKS.value = data.sks
            }).catch((error) => {
                alert('error', error)
            })
        } else {
            mkSemester.placeholder = "Mata Kuliah tersedia di semester"
            mkSemester.value = ""
            mkSKS.placeholder = "Jumlah SKS yang dapat diambil"
            mkSKS.value = ""
        }

    })

    form.addEventListener('submit', (e) => {
        e.preventDefault()

        const formData = new FormData(e.target)

        axios.post('/api/nilai', formData).then((result) => {
            console.log(result.data.message)
            closemodalTambahNilai()
            openModalSuccess(result.data.message)
        }).catch((err) => {
            console.log(err)
            closemodalTambahNilai()
            openModalFailed('Gagal ' + err)
        })
    })
</script>
@endpush
