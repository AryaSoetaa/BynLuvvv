@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white shadow-sm rounded-lg">
                <h2 class="font-bold text-xl text-gray-800 leading-tight text-center mb-6">Buat Modul Baru untuk {{ $kelas_praktikum->nama }}</h2>
                <form action="{{ route('admin.kelaspraktikums.modul.store', $kelas_praktikum) }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="nama_modul" class="block text-sm font-medium text-gray-700">Nama Modul</label>
                        <input type="text" name="nama_modul" id="nama_modul" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required>
                    </div>
                    <div class="mb-4">
                        <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                        <textarea name="content" id="content" rows="5" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required></textarea>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">Simpan Modul</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
