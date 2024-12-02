@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Kelaspraktikum
@endsection

@section('content')
<section class="content container mx-auto py-8">
        <div class="flex justify-center">
            <div class="w-full max-w-3xl">
                <div class="bg-white shadow-lg rounded-lg">
                    <div class="bg-blue-600 p-4 rounded-t-lg text-white">
                        <h2 class="text-lg font-semibold">{{ __('Create') }} Kelaspraktikum</h2>
                    </div>
                    <div class="p-6">
                        <form method="POST" action="{{ route('admin.kelaspraktikums.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-4">
                                <label for="nama_praktikum" class="block text-gray-700 font-bold mb-2">{{ __('Nama Praktikum') }}</label>
                                <input type="text" name="nama_praktikum" class="mt-1 block w-full border px-4 py-2 border rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200" id="nama_praktikum" value="{{ old('nama_praktikum', $kelaspraktikum->nama_praktikum ?? '') }}" required>
                            </div>

                            <div class="mb-4">
                                <label for="dosen" class="block text-gray-700 font-bold mb-2">{{ __('Dosen') }}</label>
                                <input type="text" name="dosen" class="mt-1 block w-full border px-4 py-2 border rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200" id="dosen" value="{{ old('dosen', $kelaspraktikum->dosen ?? '') }}" required>
                            </div>

                            <div class="mb-4">
                                <label for="asisten_praktikum" class="block text-gray-700 font-bold mb-2">{{ __('Asisten Praktikum') }}</label>
                                <input type="text" name="asisten_praktikum" class=" mt-1 block w-full border px-4 py-2 border rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200" id="asisten_praktikum" value="{{ old('asisten_praktikum', $kelaspraktikum->asisten_praktikum ?? '') }}" required>
                            </div>

                            <div class="mb-4">
                                <label for="kepala_laboratorium" class="block text-gray-700 font-bold mb-2">{{ __('Kepala Laboratorium') }}</label>
                                <input type="text" name="kepala_laboratorium" class=" mt-1 block w-full border px-4 py-2 border rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200" id="kepala_laboratorium" value="{{ old('kepala_laboratorium', $kelaspraktikum->kepala_laboratorium ?? '') }}" required>
                            </div>

                            <!-- Input untuk tanggal dibuka -->
                            <div class="mb-4">
                                <label for="tanggal_dibuka" class="block text-gray-700 font-bold mb-2">{{ __('Tanggal Dibuka') }}</label>
                                <input type="date" name="tanggal_dibuka" class="mt-1 block w-full border px-4 py-2 border rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200" id="tanggal_dibuka" value="{{ old('tanggal_dibuka', $kelaspraktikum->tanggal_dibuka ?? '') }}" required>
                            </div>

                            <!-- Input untuk tanggal ditutup -->
                            <div class="mb-4">
                                <label for="tanggal_ditutup" class="block text-gray-700 font-bold mb-2">{{ __('Tanggal Ditutup') }}</label>
                                <input type="date" name="tanggal_ditutup" class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200" id="tanggal_ditutup" value="{{ old('tanggal_ditutup', $kelaspraktikum->tanggal_ditutup ?? '') }}" required>
                            </div>

                            <!-- Tombol untuk menyimpan -->
                            <div class="mb-4">
                                <button type="submit" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-700">{{ __('Simpan') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
