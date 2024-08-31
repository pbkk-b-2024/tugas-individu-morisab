<x-layout>
    <div class="h-full ml-14 mt-14 mb-10 md:ml-64">
        <div class="p-4 gap-4">
            <div
                class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">
                <div class="rounded-t mb-0 px-0 border-0">
                    <div class="flex flex-wrap items-center px-4 py-4">
                        <div class="relative w-full max-w-full flex-grow flex-1 flex items-center">
                            <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50 mr-2">Redirect Routes
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="block w-full overflow-x-auto">
                    <div class="items-center w-full bg-transparent border-collapse">
                        <table class="items-center w-full bg-transparent border-collapse">
                            <thead>
                                <tr>
                                    <th
                                        class="px-6 bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-gray-50 align-middle border border-solid border-gray-100 dark:border-gray-800 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        URI
                                    </th>
                                    <th
                                        class="px-6 bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-gray-50 align-middle border border-solid border-gray-100 dark:border-gray-800 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Redirects To
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        /pertemuan1/ganjilgenap
                                    </td>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        <a href="{{ url('/pertemuan1/genapganjil') }}"
                                            class="text-blue-600 hover:underline">
                                            /pertemuan1/genapganjil
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
