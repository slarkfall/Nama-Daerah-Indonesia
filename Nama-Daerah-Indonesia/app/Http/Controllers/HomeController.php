<?php

namespace App\Http\Controllers;

use App\Models\desa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $desas = desa::all();

        return view('welcome', compact('promo'));

    }

}
