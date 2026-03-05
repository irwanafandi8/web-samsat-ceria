<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function index(Request $request)
    {
        $artikels = Artikel::latest('datetime')->get()->map(function ($artikel) {
            return [
                'judul'    => $artikel->judul,
                'slug'     => $artikel->slug,
                'gambar'   => $artikel->gambar,
                'datetime' => $artikel->datetime,
            ];
        })->toArray();

        $artikelDetail = null;

        if ($request->has('slug')) {
            $detail = Artikel::where('slug', $request->slug)->first();
            if ($detail) {
                session(['show_detail' => true]);
                $artikelDetail = [
                    'judul'      => $detail->judul,
                    'sumber'     => $detail->sumber,
                    'gambar'     => $detail->gambar,
                    'created_at' => $detail->created_at,
                    'deskripsi'  => is_array($detail->deskripsi)
                        ? $detail->deskripsi
                        : json_decode($detail->deskripsi, true),
                ];
            }
        }

        return view('pages.informasi', compact('artikels', 'artikelDetail'));
    }

    public function closeDetail()
    {
        session()->forget('show_detail');
        return redirect()->route('informasi.index');
    }

    public function show($slug)
    {
        session(['show_detail' => true]);
        return redirect()->route('informasi.index', ['slug' => $slug]);
    }
}
