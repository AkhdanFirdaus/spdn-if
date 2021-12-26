<div id="modal-success"
    class="fixed invisible inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto min-h-screen grid place-items-center">
    <div class="relative px-8 max-w-md mx-auto p-5 w-96 shadow-lg rounded-md bg-white">
        <div class="mt-3 text-center">
            <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-green-200">
                <svg class="h-6 w-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
            </div>
            <h3 class="mt-2 text-lg leading-5 font-medium text-gray-900">Success!</h3>
            <div class="mt-2 px-7 py-3">
                <p class="text-sm text-gray-500" id="modal-success-message">Message</p>
            </div>
            <div class="items-center px-4 py-3">
                <button id="modal-success-ok"
                    class="px-4 py-2 bg-green-500 text-white text-base font-medium rounded-md w-full shadow-sm hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-300">
                    Ok
                </button>
            </div>
        </div>
    </div>
</div>

<div id="modal-failed"
    class="fixed invisible inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto min-h-screen grid place-items-center">
    <div class="relative px-8 max-w-md mx-auto p-5 w-96 shadow-lg rounded-md bg-white">
        <div class="mt-3 text-center">
            <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-red-200">
                <svg class="h-6 w-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
            </div>
            <h3 class="mt-2 text-lg leading-5 font-medium text-gray-900">Success!</h3>
            <div class="mt-2 px-7 py-3">
                <p class="text-sm text-gray-500" id="modal-failed-message">Message</p>
            </div>
            <div class="items-center px-4 py-3">
                <button id="modal-failed-ok"
                    class="px-4 py-2 bg-red-500 text-white text-base font-medium rounded-md w-full shadow-sm hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-300">
                    Ok
                </button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    let modalSuccess = document.getElementById('modal-success')
    let modalSuccessMessage = document.getElementById('modal-success-message')
    let modalSuccessOk = document.getElementById('modal-success-ok')

    modalSuccessOk.addEventListener('click', () => {
        closeModalSuccess()
    })

    function openModalSuccess(message) {
        modalSuccessMessage.innerText = message
        modalSuccess.classList.remove('invisible')
    }

    function closeModalSuccess() {
        modalSuccess.classList.add('invisible')
        modalSuccessMessage.innerText = 'Message'
    }

    window.addEventListener('click', (e) => {
        if (e.target == modal) {
            closeModalSuccess()
        }
    })
</script>
@endpush
