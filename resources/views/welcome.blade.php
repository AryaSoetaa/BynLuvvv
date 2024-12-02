<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background-color: #000;
            color: #fff;
            font-family: 'Arial', sans-serif;
        }
    </style>
</head>
<body class="flex flex-col items-center justify-center min-h-screen">
    <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-blue-900 to-white opacity-100"></div>
    <div class="relative z-10 flex flex-col items-center w-full px-8 md:px-16 lg:px-32">
        <div class="flex justify-between  w-full py-4">
            <div>
                <img src="{{ asset('image/logolab.svg') }}" alt="Logo">           
            </div>
            <div>
                @if(Auth::check()) <!-- Memeriksa apakah pengguna sudah login -->
                    <a href="{{ route('dashboard') }}" class="flex font-bold inline-flex items-center px-10 py-2 border-4 border-black rounded-md text-xl text-black uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 font-bold space-x-4">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="flex font-bold inline-flex items-center px-10 py-2 border-4 border-black rounded-md text-xl text-black uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 font-bold space-x-4">
                        Log in
                    </a>
                    <a href="{{ route('register') }}" class="flex font-bold inline-flex items-center px-10 py-2 border-4 border-black rounded-md text-xl text-black uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 font-bold space-x-4">
                        Register
                    </a>
                @endif
            </div>

        </div>
        <div class="flex flex-col md:flex-row items-center md:items-start space-y-8 md:space-y-0 md:space-x-8 mt-8 w-full">
            <div class="bg-blue-800 p-8 rounded-lg shadow-lg w-full md:w-1/2">
                <div class="text-white- text-2xl mb-4">
                <a href="#" class="text-white font-bold">Info Laboratorium</a>
                </div>
                <div class="text-white font-semi-bold text-lg mb-4">
                <h1>Lorem Ipsum</h1>
                </div>
                <p class="text-gray-300">
                    Laravel has wonderful documentation covering every aspect of the framework. Whether you are a newcomer or have prior experience with Laravel, we recommend reading our documentation from beginning to end.
                </p>
            </div>
            <div class="space-y-4 w-full md:w-1/2">
                <div class="bg-blue-800 p-6 rounded-lg shadow-lg">
                    <div class="flex items-center justify-between">
                    <div class="fas fa-newspaper text-white- text-2xl mb-4">
                        <a href="#" class="text-white font-bold">Jadwal Laboratorium</a>
                    </div>
                        <div class="text-blue-300">
                            <a href="#" class="fas fa-arrow-right"></a>
                        </div>
                    </div>
                    <p class="text-gray-300 mt-2">
                        Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                    </p>
                </div>
                <div class="bg-blue-800 p-6 rounded-lg shadow-lg">
                    <div class="flex items-center justify-between">
                        <div class="fas fa-cogs text-white text-2xl mb-4">
                            <a href="#" class="text-white font-bold"></a> Pinjam Laboratorium
                        </div>
                        <div class="text-blue-300">
                            <a href="#" class="fas fa-arrow-right"></a>
                        </div>
                    </div>
                    <p class="text-gray-300 mt-2">
                        Laravel's robust library of first-party
                    </p>
                </div>