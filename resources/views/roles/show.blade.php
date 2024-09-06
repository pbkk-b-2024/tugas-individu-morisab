<x-layout>
    <div class="h-full ml-14 mt-14 mb-10 md:ml-64">
        <div class="p-4 gap-4">
            <div
                class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">
                <div class="rounded-t mb-0 px-0 border-0">
                    <div class="flex flex-wrap items-center px-4 py-4">
                        <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">Role Details</h3>
                    </div>

                    <div class="px-4 py-4">
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-200">Name</label>
                            <div
                                class="mt-1 block w-full bg-gray-200 dark:bg-gray-700 border-gray-300 rounded shadow-sm py-3 px-3">
                                {{ $role->name }}
                            </div>
                        </div>

                        <div class="flex justify-between mt-4">
                            <a href="{{ route('roles.edit', $role->id) }}"
                                class="bg-yellow-500 text-white px-4 py-2 rounded">Edit Role</a>
                            <form action="{{ route('roles.destroy', $role->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Delete
                                    Role</button>
                            </form>
                            <a href="{{ route('roles.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Back
                                to List</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
