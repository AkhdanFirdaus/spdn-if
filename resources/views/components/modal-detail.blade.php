<div id="modal-detail"
    class="fixed invisible inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto min-h-screen grid place-items-center">
    <div class="relative px-8 max-w-md mx-auto p-5 w-96 shadow-lg rounded-md bg-white">
        <div class="mt-3 text-center">
            <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-green-200">
                <svg class="h-6 w-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
            </div>
            <h3 class="mt-2 text-lg leading-5 font-medium text-gray-900" id="modal-detail-title">Success!</h3>
            <div class="mt-2 px-7 py-3">
                <div id="modal-detail-content"></div>
            </div>
            <div class="items-center px-4 py-3 grid grid-cols-2 gap-4">
                <a href="#" id="modal-detail-link"
                    class="px-4 py-2 border-2 border-green-500 text-green-500 text-base font-medium rounded-md w-full shadow-sm hover:bg-green-500 hover:text-white">
                    Detail
                </a>
                <button id="modal-detail-ok"
                    class="px-4 py-2 bg-green-500 text-white text-base font-medium rounded-md w-full shadow-sm hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-300">
                    Ok
                </button>
            </div>
        </div>
    </div>
</div>

<div id="modal-detail-failed"
    class="fixed invisible inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto min-h-screen grid place-items-center">
    <div class="relative px-8 max-w-md mx-auto p-5 w-96 shadow-lg rounded-md bg-white">
        <div class="mt-3 text-center">
            <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-red-200">
                <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40"
                    enable-background="new 0 0 40 40">
                    <line x1="15" y1="15" x2="25" y2="25" stroke="#fff" stroke-width="2.5" stroke-linecap="round"
                        stroke-miterlimit="10"></line>
                    <line x1="25" y1="15" x2="15" y2="25" stroke="#fff" stroke-width="2.5" stroke-linecap="round"
                        stroke-miterlimit="10"></line>
                </svg>
            </div>
            <h3 class="mt-2 text-lg leading-5 font-medium text-gray-900">Failed!</h3>
            <div class="mt-2 px-7 py-3">
                <p class="text-sm text-gray-500" id="modal-detail-failed-content">Content</p>
            </div>
            <div class="items-center px-4 py-3">
                <button id="modal-detail-failed-ok"
                    class="px-4 py-2 bg-red-500 text-white text-base font-medium rounded-md w-full shadow-sm hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-300">
                    Ok
                </button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    let modalDetail = document.getElementById('modal-detail')
    let modalDetailTitle = document.getElementById('modal-detail-title')
    let modalDetailContent = document.getElementById('modal-detail-content')
    let modalDetailLink = document.getElementById('modal-detail-link')
    let modalDetailOk = document.getElementById('modal-detail-ok')

    modalDetailOk.addEventListener('click', () => {
        closeModalDetail()
    })

    function openModalDetail(title, content, link) {
        modalDetailTitle.innerText = title
        modalDetailContent.innerHTML = content
        modalDetailLink.href = link
        modalDetail.classList.remove('invisible')
    }

    function closeModalDetail() {
        modalDetail.classList.add('invisible')
        modalDetailContent.innerHTML = 'Content'
    }
    
    let modalDetailFailed = document.getElementById('modal-detail-failed')
    let modalDetailFailedContent = document.getElementById('modal-detail-failed-content')
    let modalDetailFailedOk = document.getElementById('modal-detail-failed-ok')

    modalDetailFailedOk.addEventListener('click', () => {
        closeModalDetailFailed()
    })

    function openModalDetailFailed(content) {
        modalDetailFailedContent.innerHTML = content
        modalDetailFailed.classList.remove('invisible')
    }

    function closeModalDetailFailed() {
        modalDetailFailed.classList.add('invisible')
        modalDetailFailedContent.innerHTML = 'Content'
    }

    window.addEventListener('click', (e) => {
        if (e.target == modalDetail) {
            closeModalFailed()
        }
        if (e.target == modalDetailFailed) {
            closeModalDetailFailed()
        }
    })
</script>
@endpush