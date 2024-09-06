<x-layout>
    <div class="h-full ml-14 mt-14 mb-10 md:ml-64">
        <div class="p-4 gap-4">
            <div
                class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">
                <div class="rounded-t mb-0 px-0 border-0">
                    <div class="flex flex-wrap items-center px-4 py-4">
                        <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">Edit User</h3>
                    </div>

                    <form action="{{ route('users.update', $user->id) }}" method="POST" class="px-4 py-4">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="name"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-200">Name</label>
                            <input type="text" id="name" name="name" value="{{ $user->name }}"
                                placeholder="Name"
                                class="mt-1 block w-full bg-gray-200 dark:bg-gray-700 border-gray-300 rounded shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 py-3 px-3">
                        </div>

                        <div class="mb-4">
                            <label for="email"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-200">Email</label>
                            <input type="email" id="email" name="email" value="{{ $user->email }}"
                                placeholder="Email"
                                class="mt-1 block w-full bg-gray-200 dark:bg-gray-700 border-gray-300 rounded shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 py-3 px-3">
                        </div>

                        <div class="mb-4">
                            <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-200">New
                                Password</label>
                            <input type="password" id="password" name="password" placeholder="New Password"
                                class="mt-1 block w-full bg-gray-200 dark:bg-gray-700 border-gray-300 rounded shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 py-3 px-3">
                        </div>

                        <div class="mb-4">
                            <label for="password_confirmation"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-200">Confirm New
                                Password</label>
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                placeholder="Confirm New Password"
                                class="mt-1 block w-full bg-gray-200 dark:bg-gray-700 border-gray-300 rounded shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 py-3 px-3">
                        </div>

                        <div class="mb-4">
                            <label for="role_id"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-200">Role</label>
                            <select id="role_id" name="role_id"
                                class="mt-1 block w-full bg-gray-200 dark:bg-gray-700 border-gray-300 rounded shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 py-3 px-3">
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}"
                                        {{ $role->id == $user->role_id ? 'selected' : '' }}>
                                        {{ $role->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update User</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
