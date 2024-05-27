<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diskusi;

class DiskusiController extends Controller
{
    public function index()
    {
        $diskusis = Diskusi::all();
        return view('diskusis.index', compact('diskusis'));
    }

    public function create()
    {
        return view('diskusis.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'namauser' => 'required',
            'judul' => 'required',
            'konten' => 'required',
        ]);

        Diskusi::create([
            'namauser' => $request->namauser,
            'judul' => $request->judul,
            'konten' => $request->konten,
        ]);

        return redirect()->route('diskusis.index');
    }

    public function show(Diskusi $diskusi)
    {
        return view('diskusis.show', compact('diskusis'));
    }

    public function storeComment(Request $request, Diskusi $diskusi)
    {
        $request->validate([
            'komentar' => 'required',
        ]);

        $diskusi->update([
            'komentar' => $request->komentar,
        ]);

        return redirect()->route('diskusis.show', $diskusi->id);
    }
}
