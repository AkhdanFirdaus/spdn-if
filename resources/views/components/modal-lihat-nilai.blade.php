<div id="modal-lihat-nilai"
    class="fixed invisible inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto min-h-screen grid place-items-center">
    <div class="relative p-6 w-8/12 shadow-lg rounded-md bg-white">
        <div class="space-y-6">
            <div class="grid grid-cols-3 grid-flow-row gap-4 w-full" id="grid-grade">
            </div>
            <div class=" flex justify-end space-x-4">
                <button class="button-secondary" type="button" id="modal-cancel-lihat-nilai">Cancel</button>
                <button class="button-primary" type="submit">Ok</button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    const modalLihatNilai = document.getElementById('modal-lihat-nilai')
    const modalCancelLihatNilai = document.getElementById('modal-cancel-lihat-nilai')

    modalCancelLihatNilai.addEventListener('click', () => {
        closeModalLihatNilai()
    })

    function openModalLihatNilai(nim) {
        modalLihatNilai.classList.remove('invisible')
        getData(nim)
    }

    function closeModalLihatNilai() {
        modalLihatNilai.classList.add('invisible')
    }

    window.addEventListener('click', (e) => {
        if (e.target == modalLihatNilai) {
            closeModalLihatNilai()
        }
    })

    function getData(nim) {
        const card = (data) => `
        <div class="card-primary w-56 space-y-4">
            <h1>${data.mata_kuliah.nama}</h1>
            <small>Semester ${data.mata_kuliah.semester}</small> -
            <small>${data.mata_kuliah.sks} SKS</small>
            <hr>
            <div class="flex flex-col md:flex-row justify-between">
                <ul>
                    <li>Tugas: ${data.tugas}</li>
                    <li>UTS: ${data.uts}</li>
                    <li>UAS: ${data.uas}</li>
                    <li class="font-bold">Total: ${data.total}</li>
                </ul>
                <div>
                    <div class="button-primary">${data.grade}</div>
                </div>
            </div>
        </div>
        `
        axios.get('/api/nilai/' + nim).then((result) => {
            const message = result.data.message
            const data = result.data.data

            let html = '';
            if (data.length > 0) {
                data.forEach(element => {
                    html += card(element)
                })

                document.getElementById('grid-grade').innerHTML = html
            } else {
                document.getElementById('grid-grade').innerHTML = '<div class="flex w-full h-full place-content-center">Tidak ada data</div>'
            }

        }).catch((err) => {
            alert(err)
        })
    }
</script>
@endpush
