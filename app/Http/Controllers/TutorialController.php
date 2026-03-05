<?php

namespace App\Http\Controllers;

use App\Data\TutorialData;
use Illuminate\View\View;

class TutorialController extends Controller
{
    public function index(): View
    {
        return view('tutorial.index');
    }

    public function show(string $page): View
    {
        $data = TutorialData::getByPage($page);

        if (!$data) {
            abort(404);
        }

        return view('tutorial.detail', compact('data', 'page'));
    }
}
