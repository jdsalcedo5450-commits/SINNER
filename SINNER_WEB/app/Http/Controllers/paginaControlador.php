<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaControlador extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function catalogo()
    {
        return view('catalogo');
    }

    public function streetwear()
    {
        return view('streetwear');
    }

    public function oldmoney()
    {
        return view('oldmoney');
    }

    public function nosotros()
    {
        return view('nosotros');
    }
}