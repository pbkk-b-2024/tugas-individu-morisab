<x-layout>
    <div class="h-full ml-14 mt-14 mb-10 md:ml-64">
        <div class="p-4 gap-4">
            <div
                class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">
                <div class="rounded-t mb-0 px-0 border-0">
                    <form action="#" method="GET">
                        <div class="flex flex-wrap items-center px-4 py-4">
                            <div class="relative w-full max-w-full flex-grow flex-1 flex items-center">
                                <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50 mr-2">Prima</h3>
                                <input type="text" class="form-input px-3 py-2 rounded border mr-2 text-gray-900"
                                    placeholder="Input number" name="n">
                                <button
                                    class="bg-blue-500 text-white active:bg-blue-600 font-bold uppercase text-xs px-4 py-2 rounded outline-none focus:outline-none"
                                    type="submit">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                @if (count($numberDetails) > 0)
                    <div class="block w-full overflow-x-auto">
                        <div class="items-center w-full bg-transparent border-collapse">
                            <table class="items-center w-full bg-transparent border-collapse">
                                <thead>
                                    <tr>
                                        <th
                                            class="px-6 bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-gray-50 align-middle border border-solid border-gray-100 dark:border-gray-800 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                            Angka
                                        </th>
                                        <th
                                            class="px-6 bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-gray-50 align-middle border border-solid border-gray-100 dark:border-gray-800 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                            Prima / Bukan Prima
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($numberDetails as $detail)
                                        <tr>
                                            <td
                                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                                {{ $detail['number'] }}
                                            </td>
                                            <td
                                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                {{ $detail['type'] }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-layout>
