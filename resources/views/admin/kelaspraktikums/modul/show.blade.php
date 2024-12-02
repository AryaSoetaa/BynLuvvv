@extends('layouts.app')

@section('template_title')
    Detail Modul
@endsection

@section('content')
    <section class="container mx-auto py-8">
        <div class="flex justify-center">
            <div class="w-full max-w-lg">
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h2 class="text-xl font-semibold text-blue-600 mb-6">{{ $modul->nama_modul }}</h2>

                    <div class="mb-4">
                        <span class="font-semibold text-gray-700">Nama Modul:</span>
                        <p class="text-gray-900">{{ $modul->nama_modul }}</p>
                    </div>

                    <div class="mb-4">
                        <span class="font-semibold text-gray-700">Content:</span>
                        <p class="text-gray-900">{{ $modul->content }}</p>
                    </div>

                    <div class="mt-6">
                        <a href="{{ route('admin.kelaspraktikums.modul.index', ['kelas_praktikum' => $kelas_praktikum->id]) }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Kembali
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
