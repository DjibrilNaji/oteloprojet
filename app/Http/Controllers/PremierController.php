<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

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
