<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\provedor;

class ProvedorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	//$provedor=Provedor::orderBy()
    	return view("provedor.index");
    }

    public function store()
    {
    	return view("provedor.store");
    }

    public function show()
    {
    	return view("provedor.show");
    }
}
