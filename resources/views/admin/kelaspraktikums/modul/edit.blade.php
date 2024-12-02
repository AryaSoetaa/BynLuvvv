@extends('layouts.app')

@section('template_title')
    Edit Modul
@endsection

@section('content')
    <section class="container mx-auto py-8">
        <div class="flex justify-center">
            <div class="w-full max-w-lg">
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h2 class="text-2xl font-semibold text-blue-600 mb-6">Edit Modul</h2>

                    @include('modul.form', [
                        'action' => route('admin.kelaspraktikums.modul.update', ['kelas_praktikum' => $kelas_praktikum->id, 'modul' => $modul->id]),
                        'isEdit' => true,
                        'modul' => $modul
                    ])
                </div>
            </div>
        </div>
    </section>
@endsection
