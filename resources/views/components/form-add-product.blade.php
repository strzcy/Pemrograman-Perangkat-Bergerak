<div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
    <!-- Modal header -->
    <div
        class="mb-4 flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
            Add Product
        </h3>
        <button type="button"
            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
            data-modal-hide="add-product-modal">
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
            <span class="sr-only">Close modal</span>
        </button>
    </div>
    <!-- Modal body -->

    <form class="max-w-lg mx-auto" method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
    @csrf

    <!-- IMAGE -->
    <input id="dropzone-file" name="image" type="file" />

    <!-- NAME -->
    <input type="text" name="name" required>

    <!-- STOCK -->
    <input type="number" name="stock" required>

    <!-- PRICE -->
    <input type="number" name="price" required>

    <!-- CATEGORY -->
    <select name="category_id" required>
        <option value="US">United States</option>
<option value="CA">Canada</option>
<option value="FR">France</option>
<option value="DE">Germany</option>

    </select>

    <!-- SUBMIT -->
    <button type="submit">Save</button>
</form>



</div>
@push('scripts')
    <script>
        const inputFile = document.getElementById("dropzone-file");
        const fileNameText = document.getElementById("file-name");

        inputFile.addEventListener("change", (event) => {
            const file = event.target.files[0];
            if (file) {
                fileNameText.textContent = `📁 ${file.name}`;
            } else {
                fileNameText.textContent = "";
            }
        });
    </script>
@endpush