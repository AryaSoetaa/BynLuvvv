<?php

namespace App\Http\Controllers;

use App\Models\Kelaspraktikum;
use App\Models\Modul;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\KelaspraktikumRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class KelaspraktikumController extends Controller
{
    
    public function index(Request $request): View
    {
        $kelaspraktikums = Kelaspraktikum::paginate();

        return view('admin.kelaspraktikums.index', compact('kelaspraktikums'))
            ->with('i', ($request->input('page', 1) - 1) * $kelaspraktikums->perPage());
    }

    
    public function create(): View
    {
        $kelaspraktikum = new Kelaspraktikum();

        return view('admin.kelaspraktikums.create', compact('kelaspraktikum'));
    }

   
    public function store(KelaspraktikumRequest $request): RedirectResponse
    {
        try {
            Kelaspraktikum::create($request->validated());
            return Redirect::route('admin.kelaspraktikums.index')
                ->with('success', 'Kelaspraktikum created successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menyimpan data: ' . $e->getMessage());
        }
    }
    

   
    public function show($id)
    {
        $kelaspraktikum = Kelaspraktikum::find($id); // Ambil kelas praktikum berdasarkan ID

        // Cek jika kelas praktikum tidak ditemukan
        if (!$kelaspraktikum) {
            return redirect()->route('admin.kelaspraktikums.index')
                ->with('error', 'Kelas Praktikum tidak ditemukan.');
        }

        // Jika ditemukan, kembalikan view
        return view('admin.kelaspraktikums.show', compact('kelaspraktikum'));
    }

    public function edit($id): View
    {
        $kelaspraktikum = Kelaspraktikum::find($id);

        return view('admin.kelaspraktikums.edit', compact('kelaspraktikum'));
    }

    
    public function update(KelaspraktikumRequest $request, Kelaspraktikum $kelaspraktikum): RedirectResponse
    {
        $kelaspraktikum->update($request->validated());

        return Redirect::route('admin.kelaspraktikums.index')
            ->with('success', 'Kelaspraktikum updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Kelaspraktikum::find($id)->delete();

        return Redirect::route('admin.kelaspraktikums.index')
            ->with('success', 'Kelaspraktikum deleted successfully');
    }

    // Menampilkan form untuk mendaftar kelas praktikum
    public function register(Request $request, Kelaspraktikum $kelaspraktikum)
    {
        // Validasi jika mahasiswa sudah terdaftar
        $request->validate([
            'mahasiswa_id' => 'required|exists:mahasiswas,id',
        ]);

        $kelaspraktikum->mahasiswa()->attach($request->mahasiswa_id);

        return redirect()->route('admin.kelaspraktikums.index')->with('success', 'Anda berhasil mendaftar di kelas praktikum!');
    }

    // Menambahkan persyaratan pada kelas praktikum
    public function addPersyaratan(Request $request, $kelaspraktikumId)
    {
        
        $request->validate([
            'persyaratan_id' => 'required|array',
            'persyaratan_id.*' => 'exists:persyaratans,id',  
        ]);

        // Ambil kelas praktikum
        $kelaspraktikum = Kelaspraktikum::findOrFail($kelaspraktikumId);

        // Menambahkan persyaratan pada kelas praktikum
        $kelaspraktikum->persyaratan()->sync($request->persyaratan_id);

        return redirect()->route('kelaspraktikum.show', $kelaspraktikumId)
                         ->with('success', 'Persyaratan berhasil ditambahkan.');
    }

}