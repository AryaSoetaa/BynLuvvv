@extends('layouts.app')

@section('template_title')
    {{ $kelaspraktikum->nama_praktikum ?? __('Detail Kelas Praktikum') }}
@endsection

@section('content')
    <section class="container mx-auto py-8 px-9">
        <div class="flex justify-center">
            <div class="w-full">
                <div class="bg-white rounded-lg shadow-lg">
                    <div class="bg-blue-600 px-6 py-4 flex justify-between rounded-lg items-center border-b border-blue-200">
                        <h5 class="text-lg font-semibold text-white">{{ __('Detail Kelas Praktikum') }}</h5>
                    </div>
                    <div class="p-6 rounded-lg bg-gray-60">
                        <table class="w-full border border-blue-300">
                            <tbody>
                                <tr class="border-b border-gray-200">
                                    <th class="w-1/3 px-4 py-3 text-left bg-gray-100 font-bold text-gray-700">Nama Praktikum</th>
                                    <td class="px-4 py-3 text-gray-800">{{ $kelaspraktikum->nama_praktikum }}</td>
                                </tr>
                                <tr class="border-b border-gray-200">
                                    <th class="px-4 py-3 text-left bg-gray-100 font-bold text-gray-700">Dosen</th>
                                    <td class="px-4 py-3 text-gray-800">{{ $kelaspraktikum->dosen }}</td>
                                </tr>
                                <tr class="border-b border-gray-200">
                                    <th class="px-4 py-3 text-left bg-gray-100 font-bold text-gray-700">Asisten Praktikum</th>
                                    <td class="px-4 py-3 text-gray-800">{{ $kelaspraktikum->asisten_praktikum }}</td>
                                </tr>
                                <tr class="border-b border-gray-200">
                                    <th class="px-4 py-3 text-left bg-gray-100 font-bold text-gray-700">Kepala Laboratorium</th>
                                    <td class="px-4 py-3 text-gray-800">{{ $kelaspraktikum->kepala_laboratorium }}</td>
                                </tr>
                                <tr class="border-b border-gray-200">
                                    <th class="px-4 py-3 text-left bg-gray-100 font-bold text-gray-700">Tanggal Dibuka</th>
                                    <td class="px-4 py-3 text-gray-800">{{ $kelaspraktikum->tanggal_dibuka }}</td>
                                </tr>
                                <tr>
                                    <th class="px-4 py-3 text-left bg-gray-100 font-bold text-gray-700">Tanggal Ditutup</th>
                                    <td class="px-4 py-3 text-gray-800">{{ $kelaspraktikum->tanggal_ditutup }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
