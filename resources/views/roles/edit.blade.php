<x-layout>
    <div class="h-full ml-14 mt-14 mb-10 md:ml-64">
        <div class="p-4 gap-4">
            <div
                class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">
                <div class="rounded-t mb-0 px-0 border-0">
                    <div class="flex flex-wrap items-center px-4 py-4">
                        <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">Edit Role</h3>
                    </div>

                    <form action="{{ route('roles.update', $role->id) }}" method="POST" class="px-4 py-4">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="name"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-200">Name</label>
                            <input type="text" id="name" name="name" value="{{ $role->name }}"
                                placeholder="Name"
                                class="mt-1 block w-full bg-gray-200 dark:bg-gray-700 border-gray-300 rounded shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 py-3 px-3">
                        </div>

                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update Role</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
