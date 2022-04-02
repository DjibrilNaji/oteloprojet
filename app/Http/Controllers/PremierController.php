<?php

namespace App\Http\Controllers;

class PremierController extends Controller
{
    public function home()
    {
        return view('accueil');
    }

    public function route()
    {
        return view('allRoutes');
    }
}
