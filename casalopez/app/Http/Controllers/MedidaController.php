<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\medida;

class MedidaController extends Controller
{
	 public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$medidas=medida::orderBy("nMedCod","ASC")->paginate();
    	return view("medida.index",compact("medidas"));
    }

    public function store(Request $request)
    {
    	$medida=new medida;
        $medida->cMedNom=$request->nombre;
        $medida->cMedDesc=$request->desc;       
        
        $medida->save();

        return redirect()->route('medida.index')->with('info','El medida fue creado.');  
    }

    public function update(Request $request,$id)
    {
        medida::where('nMedCod',"=",$id)
        ->update([
        	'cMedNom' => $request->nombre,
        	'cMedDesc' => $request->desc
        	]); 

        return redirect()->route('medida.show',$id)->with('info','El medida fue actualizado.');  
    }

    public function show($id)
    {
    	$med=medida::where('nMedCod','=',$id)->get()->first();
    	return view("medida.show",compact("med"));
    }

    public function edit($id)
    {
    	$med=medida::where('nMedCod','=',$id)->get()->first();
    	return view("medida.edit",compact("med"));
    }

    public function destroy($id)
    {
        $medida=medida::where('nMedCod','=',$id);
        $medida->delete();
        return back()->with('info','El medida fue eliminado.');
    }

    public function create()
    {
    	return view("medida.create");
    }
}

