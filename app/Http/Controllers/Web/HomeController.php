<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('web.home');
    }

    public function showAboutUs(): View
    {
        return view('web.pages.about-us');
    }

    public function showFeather(): View
    {
        return view('web.pages.feather');
    }

    public function showFibre(): View
    {
        return view('web.pages.fibre');
    }

    public function showFoam(): View
    {
        return view('web.pages.foam');
    }

    public function showCombinationFilling(): View
    {
        return view('web.pages.combination-filling');
    }

    public function showCadCutting(): View
    {
        return view('web.pages.cad-cutting');
    }

    public function showSewing(): View
    {
        return view('web.pages.sewing');
    }

    public function showTransport(): View
    {
        return view('web.pages.transport');
    }

    public function showContactUs(): View
    {
        return view('web.pages.contact-us');
    }

    public function showPrivacyPolicy(): View
    {
        return view('web.pages.privacy-policy');
    }
}
