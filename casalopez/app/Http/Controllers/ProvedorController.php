<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProvedorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	return view("provedor.index");
    }

    public function store()
    {
    	return "guardado";
    }
}
