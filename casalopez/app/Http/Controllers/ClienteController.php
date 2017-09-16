<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente; /*Se agregra el nombre del modelo*/
use App\Tipodoc; /*Se agregra el nombre del modelo*/
use App\Http\Requests\ClienteRequest;

class ClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        $tipodoc=Tipodoc::select('nTdocCod','cTdocSigla')->get();
        return view('cliente.create',compact("tipodoc"));
    }

    public function store(ClienteRequest $request)
    {
        //dd($request);
        $cliente = new Cliente;
        $cliente->nTdocCod = $request->tipodoc_id;
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

        $tipodoc = Tipodoc::select('nTdocCod','cTdocSigla')->get();
        
        return view('cliente.edit', compact('cliente','tipodoc'));
    }

   public function update(ClienteRequest $request,$id)
    {
        $cliente = Cliente::find($id);
        
        $cliente->nTdocCod = $request->nTdocCod;
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

       // $cliente = Cliente::orderby('nClieCod', 'ASC')->tipodoc();
       // $cliente->paginate(5);
       // dd($cliente);
        //return view('cliente.index', compact('cliente','tipodoc'));
    }

   public function show($id)
    {
        $cliente = Cliente::find($id);
    	return view('cliente.show', compact('cliente'));
    }
}
