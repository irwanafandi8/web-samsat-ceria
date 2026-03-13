<?php

namespace App\Http\Controllers;

use App\Models\PesanKontak;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class HubungiKamiController extends Controller
{
    public function index(): View
    {
        // Hapus session success setelah dibaca
        $success = session()->pull('success');
        return view('pages.hubungi-kami', compact('success'));
    }

    public function store(Request $request): RedirectResponse
    {
        try {
            $validated = $request->validate([
                'name'    => 'required|string|max:255',
                'email'   => 'required|email|max:255',
                'subject' => 'required|string|max:255',
                'message' => 'required|string|min:10|max:2000',
            ], [
                'name.required'    => 'Nama lengkap wajib diisi.',
                'email.required'   => 'Email wajib diisi.',
                'email.email'      => 'Format email tidak valid.',
                'subject.required' => 'Subjek wajib diisi.',
                'message.required' => 'Pesan wajib diisi.',
                'message.min'      => 'Pesan minimal 10 karakter.',
                'message.max'      => 'Pesan maksimal 2000 karakter.',
            ]);

            $validated['name']    = strip_tags($validated['name']);
            $validated['subject'] = strip_tags($validated['subject']);
            $validated['message'] = strip_tags($validated['message']);

            PesanKontak::create($validated);

            return redirect()
                ->route('hubungi-kami.index')
                ->with('success', true);
        } catch (\Exception $e) {
            return redirect()
                ->route('hubungi-kami.index')
                ->with('error', 'Terlalu banyak percobaan. Silakan coba lagi dalam beberapa menit.')
                ->withInput();
        }
    }
}
