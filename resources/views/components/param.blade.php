<x-layout>
    <div class="h-full ml-14 mt-14 md:ml-64 p-4">
        <div class="bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded-lg">
            <div class="px-4 pb-2 pt-4 border-b">
                <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">1 Parameter</h3>
            </div>
            <div class="px-4 py-2">
                <h4 class="text-base text-gray-900 dark:text-gray-50">Preview URL: <span id="preview-1"></span></h4>
            </div>
            <div class="px-4 pb-4">
                <form id="form1" method="GET" action="">
                    <div class="flex items-center pb-2">
                        <input type="text" id="param1" name="param1"
                            class="form-control px-3 py-2 rounded border text-gray-900 mr-2"
                            placeholder="Enter parameter 1">
                    </div>
                    <button type="submit"
                        class="bg-blue-500 text-white active:bg-blue-600 font-bold uppercase text-xs px-4 py-2 rounded focus:outline-none">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class="h-full ml-14 mb-10 md:ml-64 px-4 pb-4">
        <div class="bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded-lg">
            <div class="px-4 pb-2 pt-4 border-b">
                <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">2 Parameter</h3>
            </div>
            <div class="px-4 py-2">
                <h4 class="text-base text-gray-900 dark:text-gray-50">Preview URL: <span id="preview-2"></span></h4>
            </div>
            <div class="px-4 pb-4">
                <form id="form2" method="GET" action="">
                    <div class="flex items-center pb-2">
                        <input type="text" id="param1-2" name="param1"
                            class="form-control px-3 py-2 rounded border text-gray-900 mr-2"
                            placeholder="Enter parameter 1">
                    </div>
                    <div class="flex items-center pb-2">
                        <input type="text" id="param2-2" name="param2"
                            class="form-control px-3 py-2 rounded border text-gray-900 mr-2"
                            placeholder="Enter parameter 2">

                    </div>
                    <button type="submit"
                        class="bg-blue-500 text-white active:bg-blue-600 font-bold uppercase text-xs px-4 py-2 rounded focus:outline-none">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form1 = document.getElementById('form1');
            const param1Input = document.getElementById('param1');
            const preview1Span = document.getElementById('preview-1');

            const form2 = document.getElementById('form2');
            const param1Input2 = document.getElementById('param1-2');
            const param2Input2 = document.getElementById('param2-2');
            const preview2Span = document.getElementById('preview-2');

            function updatePreview1() {
                const param1 = encodeURIComponent(param1Input.value);
                const previewUrl1 = `{{ url('/routing/param') }}/${param1}`;
                preview1Span.textContent = previewUrl1;
            }

            function updatePreview2() {
                const param1 = encodeURIComponent(param1Input2.value);
                const param2 = encodeURIComponent(param2Input2.value);
                const previewUrl2 = `{{ url('/routing/param') }}/${param1}/${param2}`;
                preview2Span.textContent = previewUrl2;
            }

            param1Input.addEventListener('input', updatePreview1);
            param1Input2.addEventListener('input', updatePreview2);
            param2Input2.addEventListener('input', updatePreview2);

            form1.addEventListener('submit', function(e) {
                e.preventDefault();
                const param1 = encodeURIComponent(param1Input.value);
                const url = `{{ url('/routing/param') }}/${param1}`;
                window.location.href = url;
            });

            form2.addEventListener('submit', function(e) {
                e.preventDefault();
                const param1 = encodeURIComponent(param1Input2.value);
                const param2 = encodeURIComponent(param2Input2.value);
                const url = `{{ url('/routing/param') }}/${param1}/${param2}`;
                window.location.href = url;
            });

            // Initialize previews
            updatePreview1();
            updatePreview2();
        });
    </script>
</x-layout>
