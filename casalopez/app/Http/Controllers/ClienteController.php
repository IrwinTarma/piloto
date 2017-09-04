<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente; /*Se agregra el nombre del modelo*/

class ClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$clientes = Cliente::orderby('nClieCod', 'DESC')->paginate();
    	return view('cliente.index', compact('clientes'));
    }

 /*   public function show($id)
    {
    	$clientes = Cliente::find($id);
    	return view('cliente.show', compact('clientes'))
    }
*/
    public function create()
    {
    	return view("cliente.create");
    }
}
