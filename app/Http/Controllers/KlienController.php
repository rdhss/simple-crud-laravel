<?php

namespace App\Http\Controllers;

use App\Models\Klien;
use Illuminate\Http\Request;

class KlienController extends Controller
{
    // Menampilkan semua data klien
    public function index()
    {
        $kliens = Klien::latest()->get();
        return view('kliens.index', compact('kliens'));
    }

    // Menampilkan form tambah klien
    public function create()
    {
        return view('kliens.create');
    }

    // Menyimpan data klien baru
    public function store(Request $request)
    {
        $request->validate([
            'kode_klien' => 'required',
            'nama_klien' => 'required',
            'alamat' => 'required',
            'pic' => 'required',
            'email' => 'required|email',
            'no_hp' => 'required',
        ]);

       Klien::create($request->except('_token'));

        return redirect()->route('kliens.index')
                         ->with('success', 'Klien berhasil ditambahkan');
    }

    // Menampilkan form edit data klien
    public function edit(Klien $klien)
    {
        return view('kliens.edit', compact('klien'));
    }

    // Menyimpan perubahan data klien
    public function update(Request $request, Klien $klien)
    {
        $request->validate([
            'kode_klien' => 'required',
            'nama_klien' => 'required',
            'alamat' => 'required',
            'pic' => 'required',
            'email' => 'required|email',
            'no_hp' => 'required',
        ]);

        $klien->update($request->all());

        return redirect()->route('kliens.index')
                         ->with('success', 'Data klien berhasil diperbarui');
    }

    // Menghapus data klien
    public function destroy(Klien $klien)
    {
        $klien->delete();

        return redirect()->route('kliens.index')
                         ->with('success', 'Klien berhasil dihapus');
    }
}
