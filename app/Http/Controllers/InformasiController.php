<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function index(Request $request)
    {
        $search  = $request->get('search');
        $sortBy  = $request->get('sort', 'terpopuler'); // default terpopuler

        $artikels = Artikel::with('kategori')
            ->when($search, function ($query) use ($search) {
                $query->where('judul', 'ilike', "%{$search}%");
            })
            ->when($sortBy === 'terpopuler', function ($query) {
                $query->orderBy('views', 'desc');
            })
            ->when($sortBy === 'terbaru', function ($query) {
                $query->orderBy('created_at', 'desc');
            })
            ->get()
            ->map(function ($artikel) {
                return [
                    'judul'       => $artikel->judul,
                    'slug'        => $artikel->slug,
                    'gambar'      => $artikel->gambar,
                    'kategori_id' => $artikel->kategori_id,
                    'kategori'    => $artikel->kategori?->nama,
                    'views'       => $artikel->views,
                    'created_at'  => $artikel->created_at,
                ];
            })->toArray();

        $artikelDetail  = null;
        $artikelTerkait = [];

        if ($request->has('slug')) {
            $detail = Artikel::with('kategori')
                ->where('slug', $request->slug)
                ->first();

            if ($detail) {
                // Tambah views setiap artikel dibuka
                $detail->increment('views');

                session(['show_detail' => true]);

                $artikelDetail = [
                    'judul'       => $detail->judul,
                    'sumber'      => $detail->sumber,
                    'gambar'      => $detail->gambar,
                    'kategori_id' => $detail->kategori_id,
                    'kategori'    => $detail->kategori?->nama,
                    'views'       => $detail->views,
                    'created_at'  => $detail->created_at,
                    'deskripsi'   => is_array($detail->deskripsi)
                        ? $detail->deskripsi
                        : json_decode($detail->deskripsi, true),
                ];

                $artikelTerkait = Artikel::with('kategori')
                    ->where('kategori_id', $detail->kategori_id)
                    ->where('slug', '!=', $request->slug)
                    ->orderBy('views', 'desc')
                    ->take(4)
                    ->get()
                    ->map(function ($a) {
                        return [
                            'judul'      => $a->judul,
                            'slug'       => $a->slug,
                            'gambar'     => $a->gambar,
                            'kategori'   => $a->kategori?->nama,
                            'views'      => $a->views,
                            'created_at' => $a->created_at,
                        ];
                    })->toArray();
            }
        }

        return view('pages.informasi', compact('artikels', 'artikelDetail', 'artikelTerkait', 'search', 'sortBy'));
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
