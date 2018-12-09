<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class main extends Controller
{
    public function index()
    {
    	return view('main');
    }

    public function show($id)
    {
    	return "pregunta {$id}";
    }

    public function results()
    {
    	return view('results');
    }
}
