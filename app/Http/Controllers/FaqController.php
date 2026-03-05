<?php

namespace App\Http\Controllers;

use App\Data\FaqData;
use Illuminate\View\View;

class FaqController extends Controller
{
    public function index(): View
    {
        $faqs = FaqData::getAll();
        return view('pages.faq', compact('faqs'));
    }
}
