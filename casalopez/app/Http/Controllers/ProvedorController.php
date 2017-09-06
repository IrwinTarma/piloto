<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\provedor;
use App\Http\Requests\ProvedorRequest;


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

    public function store(ProvedorRequest $request)
    {
    	$provedor=new provedor;
        $provedor->nProvRuc=$request->ruc;
        $provedor->cProvNom=$request->nombre;
        $provedor->cProvDir=$request->dir;
        $provedor->cProvTel=$request->tel;
        $provedor->cProvCel=$request->cel;            
        $provedor->cProvEma=$request->email;
        $provedor->cProvObs=$request->obs;
        
        $provedor->save();

        return redirect()->route('provedor.index')->with('info','El proveedor fue creado.');  
    }

    public function update(ProvedorRequest $request,$id)
    {
        $provedor=provedor::find($id);
        $provedor->nProvRuc=$request->ruc;
        $provedor->cProvNom=$request->nombre;
        $provedor->cProvDir=$request->dir;
        $provedor->cProvTel=$request->tel;
        $provedor->cProvCel=$request->cel;            
        $provedor->cProvEma=$request->email;
        $provedor->cProvObs=$request->obs;
        
        $provedor->save();

        return redirect()->route('provedor.show',$id)->with('info','El proveedor fue actualizado.');  
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

    public function destroy($id)
    {
        $provedor=provedor::where('nProvCod','=',$id);
        $provedor->delete();
        return back()->with('info','El proveedor fue eliminado.');
    }

    public function create()
    {
    	return view("provedor.create");
    }
}
