@extends('layouts.app')

@section('template_title')
    Daftar Modul
@endsection

@section('content')
    <section class="container mx-auto py-8">
        <div class="flex justify-center">
            <div class="w-full">
                <div class="bg-white shadow-md rounded-lg p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-2xl font-semibold text-blue-600">Daftar Modul - {{ $kelas_praktikum->nama_praktikum }}</h2>
                        
                        <div class="inline-flex space-x-4">
                            <a href="{{ route('admin.kelaspraktikums.index', ['kelas_praktikum' => $kelas_praktikum->id]) }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Kembali
                            </a>
                            <a href="{{ route('admin.kelaspraktikums.modul.create', ['kelas_praktikum' => $kelas_praktikum->id]) }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Tambah Modul
                            </a>
                        </div>
                    </div>

                    <table class="w-full text-center">
                        <thead>
                            <tr class="text-blue-600 border-t">
                                <th class="px-4 py-2">Nama Modul</th>
                                <th class="px-4 py-2">Content</th>
                                <th class="px-4 py-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($moduls as $index => $modul)
                                <tr class="border-t">
                                    <td class="px-4 py-2">{{ $modul->nama_modul }}</td>
                                    <td class="px-4 py-2">{{ $modul->content }}</td>
                                    <td class="flex justify-center space-x-5 mt-3 sm:mt-0">
                                        <a href="{{ route('admin.kelaspraktikums.modul.show', ['kelas_praktikum' => $kelas_praktikum->id, 'modul' => $modul->id]) }}" class="text-blue-600">Detail</a> 
                                        <a href="{{ route('admin.kelaspraktikums.modul.edit', ['kelas_praktikum' => $kelas_praktikum->id, 'modul' => $modul->id]) }}" class="text-green-600">Edit</a> 
                                        <form action="{{ route('admin.kelaspraktikums.modul.destroy', ['kelas_praktikum' => $kelas_praktikum->id, 'modul' => $modul->id]) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
