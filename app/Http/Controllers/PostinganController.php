<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postingan;

class PostinganController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        if ($search) {
            // Lakukan pencarian berdasarkan judul atau konten
            $postingans = Postingan::where('judul', 'like', "%{$search}%")
                                   ->orWhere('konten', 'like', "%{$search}%")
                                   ->get();
        } else {
            $postingans = Postingan::all();
        }

        return view('postingans.index', compact('postingans'));
    }

    public function create()
    {
        return view('postingans.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'judul' => 'required',
            'konten' => 'required',
        ]);

        $postingan = new Postingan();
        $postingan->nama = $request->nama;
        $postingan->judul = $request->judul;
        $postingan->konten = $request->konten;

        if ($request->hasFile('gambar')) {
            $filename = $request->gambar->getClientOriginalName();
            $request->gambar->storeAs('images', $filename, 'public');
            $postingan->gambar = $filename;
        } else {
            $postingan->gambar = 'template.png';
        }

        $postingan->save();

        return redirect()->route('postingans.index');
    }

    public function show(Postingan $postingan)
    {
        return view('postingans.show', compact('postingan'));
    }
}
