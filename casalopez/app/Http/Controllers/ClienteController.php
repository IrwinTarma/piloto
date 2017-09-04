<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente; /*Se agregra el nombre del modelo*/
use App\Http\Requests\ClienteRequest;

class ClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('cliente.create');
    }

    public function store(ClienteRequest $request)
    {
        return 'cliente guardado';
    }

   public function edit($id)
    {
        $clientes = Cliente::find($id);
        return view('cliente.edit', compact('clientes'));
    }

   public function update(ClienteRequest $request, $id)
    {
        return 'cliente actualizado' . $id;
    }

    public function index()
    {
    	$clientes = Cliente::orderby('nClieCod', 'DESC')->paginate();
    	return view('cliente.index', compact('clientes'));
    }

   public function show($id)
    {
    	$clientes = Cliente::find($id);
    	return view('cliente.show', compact('clientes'));
    }


}
