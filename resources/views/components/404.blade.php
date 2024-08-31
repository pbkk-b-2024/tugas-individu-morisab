<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite('resources/css/app.css')
    <title>Tugas 1</title>
</head>

<body>
    <section class="bg-gray-700 ">
        <div class="container flex justify-center items-center min-h-screen px-6 py-12 mx-auto">
            <div class="flex flex-col items-center max-w-sm mx-auto text-center">
                <p class="p-3 text-sm font-medium text-blue-500 rounded-full bg-gray-800">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                    </svg>
                </p>
                <h1 class="mt-3 text-2xl font-semibold dark:text-gray-50 md:text-3xl">Page not found</h1>
                <p class="mt-4 text-gray-500 dark:text-gray-400">The page you are looking for doesn't exist.</p>

                <div class="flex items-center w-full mt-6 gap-x-3 shrink-0 sm:w-auto justify-center">
                    <a href="{{ url('/') }}">
                        <button
                            class="w-1/2 px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 active:bg-blue-600 rounded-lg shrink-0 sm:w-auto hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                            Back to Dashboard
                        </button>
                    </a>
                </div>
            </div>
        </div>
        </div>
    </section>
</body>
