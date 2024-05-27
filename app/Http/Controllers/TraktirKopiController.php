<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TraktirKopi;

class TraktirKopiController extends Controller
{
    public function index()
    {
        return view('traktirkopis.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jeniskopi' => 'required',
            'harga' => 'required',
        ]);

        TraktirKopi::create([
            'jeniskopi' => $request->jeniskopi,
            'harga' => $request->harga,
        ]);

        return redirect()->back()->with('success', 'Orderan sukses, terima kasih telah mentraktir');
    }
}
