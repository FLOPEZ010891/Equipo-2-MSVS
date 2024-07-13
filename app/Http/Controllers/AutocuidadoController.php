<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutocuidadoController extends Controller
{
    public function index()
    {
        return view('autocuidado.index');
    }
}
