@extends('layouts.app')

@section('template_title')
    {{ __('Daftar Kelas Praktikum') }}
@endsection

@section('content')
    <section class="container mx-auto py-8 w-full">
        <div class="flex justify-center">
            <div class="w-full">
                <div class="bg-white shadow-lg rounded-lg">
                    <div class="bg-blue-600 text-white rounded-t-lg p-4 flex justify-between items-center">
                        <h5 class="text-lg font-semibold">{{ __('Daftar Kelas Praktikum') }}</h5>
                        <a class="bg-white text-blue-600 rounded px-4 py-2 text-sm" href="{{ route('admin.kelaspraktikums.create') }}">
                            {{ __('Buat Kelas') }}
                        </a>
                    </div>
                    <div class="p-6">
                        <div class="space-y-4 ">
                            @foreach ($kelaspraktikums as $kelaspraktikum)
                                <!-- Container link ke detail kelaspraktikum -->
                                <a href="{{ route('modul.index', $kelaspraktikum->id) }}" class="block bg-gray-100 rounded-lg p-4 shadow-md hover:bg-gray-200 transition duration-300 ease-in-out">
                                    <div class="font-semibold text-lg">
                                        {{ $kelaspraktikum->nama_praktikum }}
                                    </div>

                                    <div class="flex justify-end space-x-4 mt-2 sm:mt-0">
                                            <a class="text-orange-600 hover:text-orange-800" href="{{ route('daftarpraktikums.create') }}">{{ __('Daftar') }}</a>
                                            <a class="text-blue-600 hover:text-blue-800" href="{{ route('admin.kelaspraktikums.show', $kelaspraktikum->id) }}">{{ __('Show') }}</a>
                                            <a class="text-green-600 hover:text-green-800" href="{{ route('admin.kelaspraktikums.edit', $kelaspraktikum->id) }}">{{ __('Edit') }}</a>
                                            <form action="{{ route('admin.kelaspraktikums.destroy', $kelaspraktikum->id) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-800" onclick="return confirm('Are you sure to delete?')">
                                                    <i class="fas fa-trash"></i> {{ __('Delete') }}
                                                </button>
                                            </form>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
