<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        $layanans = Layanan::all();
        return view('layanan.index', compact('layanans'));
    }

    public function create()
    {
        return view('layanan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'deskripsi' => 'required',
        ]);

        Layanan::create($request->only('nama', 'email', 'deskripsi'));


        return redirect()->route('layanan.index')->with('success', 'Layanan ditambahkan.');
    }

    public function edit($id)
    {
        $layanan = Layanan::findOrFail($id);
        return view('layanan.edit', compact('layanan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'deskripsi' => 'required',
        ]);

        $layanan = Layanan::findOrFail($id);
        $layanan->update($request->only('nama', 'email', 'deskripsi'));

        return redirect()->route('layanan.index')->with('success', 'Pengaduan berhasil diperbarui.');
    }


    public function destroy(Layanan $layanan)
    {
        $layanan->delete();
        return redirect()->route('layanan.index')->with('success', 'Layanan dihapus.');
    }
}
