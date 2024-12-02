@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Kelaspraktikum
@endsection

@section('content')
    <section class="content container mx-auto py-8">
        <div class="flex justify-center">
            <div class="w-full max-w-3xl">
                <div class="bg-white shadow-lg rounded-lg">
                    <div class="bg-blue-500 p-4 rounded-t-lg text-white">
                        <h2 class="text-lg font-semibold">{{ __('Update') }} Kelaspraktikum</h2>
                    </div>
                    <div class="p-6">
                        <form method="POST" action="{{ route('admin.kelaspraktikums.update', $kelaspraktikum->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            
                            <div class="grid grid-cols-1 gap-6">
                                <!-- Nama Praktikum -->
                                <div class="mb-4">
                                    <label for="nama_praktikum" class="block text-gray-700 font-bold mb-2">{{ __('Nama Praktikum') }}</label>
                                    <input type="text" name="nama_praktikum" id="nama_praktikum" class="block w-full border border-gray-300 rounded-lg px-4 py-2 focus:border-blue-500 focus:ring focus:ring-blue-200" value="{{ old('nama_praktikum', $kelaspraktikum->nama_praktikum ?? '') }}" required>
                                </div>

                                <!-- Dosen -->
                                <div class="mb-4">
                                    <label for="dosen" class="block text-gray-700 font-bold mb-2">{{ __('Dosen') }}</label>
                                    <input type="text" name="dosen" id="dosen" class="block w-full border border-gray-300 rounded-lg px-4 py-2 focus:border-blue-500 focus:ring focus:ring-blue-200" value="{{ old('dosen', $kelaspraktikum->dosen ?? '') }}" required>
                                </div>

                                <!-- Asisten Praktikum -->
                                <div class="mb-4">
                                    <label for="asisten_praktikum" class="block text-gray-700 font-bold mb-2">{{ __('Asisten Praktikum') }}</label>
                                    <input type="text" name="asisten_praktikum" id="asisten_praktikum" class="block w-full border border-gray-300 rounded-lg px-4 py-2 focus:border-blue-500 focus:ring focus:ring-blue-200" value="{{ old('asisten_praktikum', $kelaspraktikum->asisten_praktikum ?? '') }}" required>
                                </div>

                                <div class="mb-4">
                                    <label for="kepala_laboratorium" class="block text-gray-700 font-bold mb-2">{{ __('Kepala Laboratorium') }}</label>
                                    <input type="text" name="kepala_laboratorium" id="kepala_laboratorium" class="block w-full border border-gray-300 rounded-lg px-4 py-2 focus:border-blue-500 focus:ring focus:ring-blue-200" value="{{ old('kepala_laboratorium', $kelaspraktikum->kepala_laboratorium ?? '') }}" required>
                                </div>
                                
                                <!-- Tanggal Dibuka -->
                                <div class="mb-4">
                                    <label for="tanggal_dibuka" class="block text-gray-700 font-bold mb-2">{{ __('Tanggal Dibuka') }}</label>
                                    <input type="date" name="tanggal_dibuka" id="tanggal_dibuka" class="block w-full border border-gray-300 rounded-lg px-4 py-2 focus:border-blue-500 focus:ring focus:ring-blue-200" value="{{ old('tanggal_dibuka', $kelaspraktikum->tanggal_dibuka ?? '') }}" required>
                                </div>

                                <!-- Tanggal Ditutup -->
                                <div class="mb-4">
                                    <label for="tanggal_ditutup" class="block text-gray-700 font-bold mb-2">{{ __('Tanggal Ditutup') }}</label>
                                    <input type="date" name="tanggal_ditutup" id="tanggal_ditutup" class="block w-full border border-gray-300 rounded-lg px-4 py-2 focus:border-blue-500 focus:ring focus:ring-blue-200" value="{{ old('tanggal_ditutup', $kelaspraktikum->tanggal_ditutup ?? '') }}" required>
                                </div>

                                <!-- Button Update -->
                                <div class="flex justify-end">
                                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">
                                        {{ __('Update') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
