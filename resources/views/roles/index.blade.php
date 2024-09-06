<x-layout>
    <div class="h-full ml-14 mt-14 mb-10 md:ml-64">
        <div class="p-4 gap-4">
            <div
                class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">
                <div class="rounded-t mb-0 px-0 border-0">
                    <div class="flex flex-wrap items-center px-4 py-4">
                        <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">Roles List</h3>
                        <form action="{{ route('roles.index') }}" method="GET" class="px-4 flex items-center">
                            <input type="text" name="search" value="{{ $search }}"
                                placeholder="Search by role name" class="text-black border rounded px-2 py-1 mr-2">
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Search</button>
                        </form>
                        <a href="{{ route('roles.create') }}"
                            class="bg-blue-500 text-white px-4 py-2 rounded ml-auto">Create
                            New
                            role</a>
                    </div>
                    <table class="w-full bg-white dark:bg-gray-800 rounded shadow-lg">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Name</th>
                                <th class="px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($roles as $role)
                                <tr class="w-2/4">
                                    <td class="px-4 py-2">{{ $role->name }}</td>
                                    <td class="px-4 py-2 text-center">
                                        <a href="{{ route('roles.show', $role->id) }}" class="text-blue-500">View</a>
                                        <a href="{{ route('roles.edit', $role->id) }}"
                                            class="text-yellow-500 ml-2">Edit</a>
                                        <form action="{{ route('roles.destroy', $role->id) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 ml-2">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="px-4 py-2 text-center">No roles found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-layout>
