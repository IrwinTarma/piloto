<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tipo;

class TipoController extends Controller
{
	 public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$tipos=tipo::orderBy("nTipoCod","ASC")->paginate();
    	return view("tipo.index",compact("tipos"));
    }

    public function store(Request $request)
    {
    	$tipo=new tipo;
        $tipo->cTipoDesc=$request->desc;
        //$tipo->tTipoFCre=$request->fcre;     
        //$tipo->tTipoFMod=$request->fmod;       
        
        $tipo->save();

        return redirect()->route('tipo.index')->with('info','El tipo fue creado.');  
    }

    public function update(Request $request,$id)
    {
        tipo::where('nTipoCod',"=",$id)
        ->update([
        	'cTipoDesc' => $request->desc//,
        	//'tTipoFCre' => $request->fcre,
        	//'tTipoFMod' => $request->fmod
        	]); 

        return redirect()->route('tipo.show',$id)->with('info','El tipo fue actualizado.');  
    }

    public function show($id)
    {
    	$tip=tipo::where('nTipoCod','=',$id)->get()->first();
    	return view("tipo.show",compact("tip"));
    }

    public function edit($id)
    {
    	$tip=tipo::where('nTipoCod','=',$id)->get()->first();
    	return view("tipo.edit",compact("tip"));
    }

    public function destroy($id)
    {
        $tipo=tipo::where('nTipoCod','=',$id);
        $tipo->delete();
        return back()->with('info','El tipo fue eliminado.');
    }

    public function create()
    {
    	return view("tipo.create");
    }
}

