<x-layout>
    <div class="h-full ml-14 mt-14 mb-10 md:ml-64 p-4">
        <div class="bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded-lg">
            <div class="px-4 pb-2 pt-4 border-b">
                <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">Hasil</h3>
            </div>
            <div class="px-4 pt-2">
                <h5 class="text-base text-gray-900 dark:text-gray-50">URL: {{ url()->current() }}</h5>
            </div>
            <div class="px-4">
                <h5 class="text-base text-gray-900 dark:text-gray-50">Parameter 1: {{ $data['param1'] }}</h5>
            </div>
            <div class="px-4 pb-2">
                <h5 class="text-base text-gray-900 dark:text-gray-50">Parameter 2: {{ $data['param2'] }}</h5>
            </div>
            <div class="px-4 pb-4">
                <a href="{{ route('param') }}">
                    <button
                        class="bg-blue-500 text-white active:bg-blue-600 font-bold uppercase text-xs px-4 py-2 rounded focus:outline-none">
                        Kembali
                    </button>
                </a>
            </div>
        </div>
    </div>
</x-layout>
