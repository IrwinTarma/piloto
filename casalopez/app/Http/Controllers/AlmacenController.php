<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\almacen;

class AlmacenController extends Controller
{
	 public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$almacens=almacen::orderBy("nAlmCod","ASC")->paginate();
    	return view("almacen.index",compact("almacens"));
    }

    public function store(Request $request)
    {
    	$almacen=new almacen;
        $almacen->cAlmNom=$request->nombre;
        $almacen->cAlmUbi=$request->ubic;       
        
        $almacen->save();

        return redirect()->route('almacen.index')->with('info','El almacen fue creado.');  
    }

    public function update(Request $request,$id)
    {
        almacen::where('nAlmCod',"=",$id)
        ->update([
        	'cAlmNom' => $request->nombre,
        	'cAlmUbi' => $request->ubic
        	]); 

        return redirect()->route('almacen.show',$id)->with('info','El almacen fue actualizado.');  
    }

    public function show($id)
    {
    	$alm=almacen::where('nAlmCod','=',$id)->get()->first();
    	return view("almacen.show",compact("alm"));
    }

    public function edit($id)
    {
    	$alm=almacen::where('nAlmCod','=',$id)->get()->first();
    	return view("almacen.edit",compact("alm"));
    }

    public function destroy($id)
    {
        $almacen=almacen::where('nAlmCod','=',$id);
        $almacen->delete();
        return back()->with('info','El almacen fue eliminado.');
    }

    public function create()
    {
    	return view("almacen.create");
    }
}
