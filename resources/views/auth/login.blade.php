<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white p-8 rounded-lg shadow-lg border">
            <h1 class="text-3xl font-bold text-center mb-4">LOGIN</h1>
            <p class="text-center mb-6">Silahkan masukan akun anda untuk masuk kedalam sistem laboratorium</p>
            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf

                <!-- NIM/NIP -->
                <div>
                    <label for="nim_nip" class="block font-medium text-sm text-gray-700">NIM / NIP</label>
                    <input id="email" class="block mt-1 w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" type="email" name="email" required autofocus />
                    @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div class="relative mt-4">
                    <label for="password" class="block font-medium text-sm text-gray-700">Password</label>
                    <input id="password" class="block mt-1 w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" type="password" name="password" required autocomplete="current-password" />
                    <i class="fas fa-eye absolute right-3 top-10 text-gray-500"></i>
                    @error('password')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Remember Me and Forgot Password -->
                <div class="flex items-center justify-between mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                        <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">Remember me</span>
                    </label>

                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                            Forgot your password?
                        </a>
                    @endif
                </div>

                <!-- Submit Button -->
                <div class="flex items-center justify-end mt-4">
                    <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition duration-200 mt-4">
                        Login
                    </button>
                </div>
            </form>

            <div class="flex items-center my-4">
                <hr class="flex-grow border-gray-300">
                <span class="mx-2 text-gray-500">or</span>
                <hr class="flex-grow border-gray-300">
            </div>

            <div class="text-center">
                <p>Don't have an account? <a href="{{ route('register') }}" class="text-blue-500 font-bold">Register Now</a></p>
            </div>
        </div>
    </div>
</x-guest-layout>
