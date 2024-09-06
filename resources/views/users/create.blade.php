<x-layout>
    <div class="h-full ml-14 mt-14 mb-10 md:ml-64">
        <div class="p-4 gap-4">
            <div
                class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">
                <div class="rounded-t mb-0 px-0 border-0">
                    <div class="flex flex-wrap items-center px-4 py-4">
                        <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">Create User</h3>
                    </div>

                    <form action="{{ route('users.store') }}" method="POST" class="px-4 py-4">
                        @csrf

                        <div class="mb-4">
                            <label for="name"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-200">Name</label>
                            <input type="text" id="name" name="name" placeholder="Name"
                                class="mt-1 block w-full bg-gray-200 dark:bg-gray-700 border-gray-300 rounded shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 py-3 px-3">
                        </div>

                        <div class="mb-4">
                            <label for="email"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-200">Email</label>
                            <input type="email" id="email" name="email" placeholder="Email"
                                class="mt-1 block w-full bg-gray-200 dark:bg-gray-700 border-gray-300 rounded shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 py-3 px-3">
                        </div>

                        <div class="mb-4">
                            <label for="password"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-200">Password</label>
                            <input type="password" id="password" name="password" placeholder="Password"
                                class="mt-1 block w-full bg-gray-200 dark:bg-gray-700 border-gray-300 rounded shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 py-3 px-3">
                        </div>

                        <div class="mb-4">
                            <label for="password_confirmation"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-200">Confirm
                                Password</label>
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                placeholder="Confirm Password"
                                class="mt-1 block w-full bg-gray-200 dark:bg-gray-700 border-gray-300 rounded shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 py-3 px-3">
                        </div>

                        <div class="mb-4">
                            <label for="role_id"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-200">Role</label>
                            <select id="role_id" name="role_id"
                                class="mt-1 block w-full bg-gray-200 dark:bg-gray-700 border-gray-300 rounded shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 py-3 px-3">
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Create User</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
<x-layout>
    <div class="h-full ml-14 mt-14 mb-10 md:ml-64">
        <div class="p-4 gap-4">
            <div
                class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">
                <div class="rounded-t mb-0 px-0 border-0">
                    <div class="flex flex-wrap items-center px-4 py-4">
                        <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">Create User</h3>
                    </div>

                    <form action="{{ route('users.store') }}" method="POST" class="px-4 py-4">
                        @csrf

                        <div class="mb-4">
                            <label for="name"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-200">Name</label>
                            <input type="text" id="name" name="name" placeholder="Name"
                                class="mt-1 block w-full bg-gray-200 dark:bg-gray-700 border-gray-300 rounded shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 py-3 px-3">
                        </div>

                        <div class="mb-4">
                            <label for="email"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-200">Email</label>
                            <input type="email" id="email" name="email" placeholder="Email"
                                class="mt-1 block w-full bg-gray-200 dark:bg-gray-700 border-gray-300 rounded shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 py-3 px-3">
                        </div>

                        <div class="mb-4">
                            <label for="password"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-200">Password</label>
                            <input type="password" id="password" name="password" placeholder="Password"
                                class="mt-1 block w-full bg-gray-200 dark:bg-gray-700 border-gray-300 rounded shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 py-3 px-3">
                        </div>

                        <div class="mb-4">
                            <label for="password_confirmation"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-200">Confirm
                                Password</label>
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                placeholder="Confirm Password"
                                class="mt-1 block w-full bg-gray-200 dark:bg-gray-700 border-gray-300 rounded shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 py-3 px-3">
                        </div>

                        <div class="mb-4">
                            <label for="role_id"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-200">Role</label>
                            <select id="role_id" name="role_id"
                                class="mt-1 block w-full bg-gray-200 dark:bg-gray-700 border-gray-300 rounded shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 py-3 px-3">
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Create User</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
