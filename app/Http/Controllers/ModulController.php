<?php

namespace App\Http\Controllers;

use App\Models\Modul;
use App\Models\KelasPraktikum;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\ModulRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ModulController extends Controller
{
    public function index(Kelaspraktikum $kelas_praktikum)
    {
        // Ambil semua modul yang terkait dengan kelas praktikum ini
        $moduls = Modul::where('kelas_praktikum_id', $kelas_praktikum->id)->get();

        return view('admin.kelaspraktikums.modul.index', compact('moduls', 'kelas_praktikum'));
    }


    public function create(Kelaspraktikum $kelas_praktikum)
    {
        return view('admin.kelaspraktikums.modul.create', compact('kelas_praktikum'));
    }

    public function store(Request $request, Kelaspraktikum $kelas_praktikum)
    {
        $request->validate([
            'nama_modul' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Simpan data modul baru
        Modul::create([
            'nama_modul' => $request->nama_modul,
            'content' => $request->content,
            'kelas_praktikum_id' => $kelas_praktikum->id,
        ]);

        return redirect()->route('admin.kelaspraktikums.modul.index', $kelas_praktikum)
            ->with('success', 'Modul berhasil dibuat.');
    }

    public function edit(Kelaspraktikum $kelas_praktikum, Modul $modul)
    {
        // Tampilkan halaman edit modul
        return view('admin.kelaspraktikums.modul.edit', compact('kelas_praktikum', 'modul'));
    }

    public function update(Request $request, Kelaspraktikum $kelas_praktikum, Modul $modul)
    {
        $request->validate([
            'nama_modul' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Update data modul
        $modul->update([
            'nama_modul' => $request->nama_modul,
            'content' => $request->content,
        ]);

        return redirect()->route('admin.kelaspraktikums.modul.index', $kelas_praktikum)
            ->with('success', 'Modul berhasil diperbarui.');
    }

    public function destroy(Kelaspraktikum $kelas_praktikum, Modul $modul)
    {
        // Hapus data modul
        $modul->delete();

        return redirect()->route('admin.kelaspraktikums.modul.index', $kelas_praktikum)
            ->with('success', 'Modul berhasil dihapus.');
    }

    public function show(Kelaspraktikum $kelas_praktikum, Modul $modul)
    {
        return view('admin.kelaspraktikums.modul.show', compact('kelas_praktikum', 'modul'));
    }
}
