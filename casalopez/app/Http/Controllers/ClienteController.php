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
        $cliente = new Cliente;
        $cliente->cClieTdoc = $request->cClieTdoc;
        $cliente->cClieNdoc = $request->cClieNdoc;
        $cliente->cClieDesc = $request->cClieDesc;
        $cliente->cClieDirec = $request->cClieDirec;
        $cliente->cClieObs = $request->cClieObs;

        $cliente->save();

        return redirect()->route('cliente.index')->with('El cliente fue guardado');
        
    }

   public function edit($id)
    {
        $cliente = Cliente::find($id);
        // $cliente = Cliente::where('nClieCod','=',$id)->get();
        // $cliente = Cliente::where('nClieCod','=',$id)->first();
        return view('cliente.edit', compact('cliente'));
    }

   public function update(ClienteRequest $request,$id)
    {
        $cliente = Cliente::find($id);

        $cliente->cClieTdoc = $request->cClieTdoc;
        $cliente->cClieNdoc = $request->cClieNdoc;
        $cliente->cClieDesc = $request->cClieDesc;
        $cliente->cClieDirec = $request->cClieDirec;
        $cliente->cClieObs = $request->cClieObs;

        $cliente->save();
        
        return redirect()->route('cliente.index')->with('El cliente fue actualizado');
        
    }

    public function index()
    {
    	$cliente = Cliente::orderby('nClieCod', 'ASC')->paginate(5);
    	return view('cliente.index', compact('cliente'));
    }

   public function show($id)
    {
        $cliente = Cliente::find($id);
    	return view('cliente.show', compact('cliente'));
    }
}
