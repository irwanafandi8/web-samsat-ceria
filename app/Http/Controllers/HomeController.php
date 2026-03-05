<?php

namespace App\Http\Controllers;

use App\Models\Artikel;

class HomeController extends Controller
{
    public function index()
    {
        $artikels = Artikel::latest('datetime')->take(2)->get()->map(function ($artikel) {
            return [
                'judul'    => $artikel->judul,
                'slug'     => $artikel->slug,
                'gambar'   => $artikel->gambar,
                'datetime' => $artikel->datetime,
            ];
        })->toArray();

        return view('pages.home', compact('artikels'));
    }
}
