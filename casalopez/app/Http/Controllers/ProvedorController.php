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
    	$provedors=provedor::orderBy("nProvCod","ASC")->paginate();
    	return view("provedor.index",compact("provedors"));
    }

    public function store()
    {
    	return view("provedor.store");
    }

    public function show($id)
    {
    	$provedor=provedor::where('nProvCod','=',$id)->get();
    	return view("provedor.show",compact("provedor"));
    }

    public function edit($id)
    {
    	$provedor=provedor::where('nProvCod','=',$id)->get();
    	return view("provedor.edit",compact("provedor"));
    }

    public function create()
    {
    	return "creación";
    }
}
