<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tipo;
use App\subtipo;

class SubtipoController extends Controller
{
	 public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$subtipos=subtipo::orderBy("nSTipCod","ASC")->paginate();
    	return view("subtipo.index",compact("subtipos"));
    }

    public function store(Request $request)
    {
    	$subtipo=new subtipo;
        $subtipo->nTipoCod=$request->tipo_id;
        $subtipo->cSTipDes=$request->sdesc;            
        
        $subtipo->save();

        return redirect()->route('subtipo.index')->with('info','El subtipo fue creado.');  
    }

    public function update(Request $request,$id)
    {
        subtipo::where('nSTipCod',"=",$id)
        ->update([
        	'nTipoCod' => $request->tipo_id,
        	'cSTipDes' => $request->sdesc//,
        	//'tTipoFMod' => $request->fmod
        	]); 

        return redirect()->route('subtipo.show',$id)->with('info','El subtipo fue actualizado.');  
    }

    public function show($id)
    {
    	$stip=subtipo::where('nSTipCod','=',$id)->get()->first();
    	$tipo=tipo::select('nTipoCod','cTipoDesc')->get();
    	return view("subtipo.show",compact("stip",'tipo'));
    }

    public function edit($id)
    {
    	$stip=subtipo::where('nSTipCod','=',$id)->get()->first();
    	$tipo=tipo::select('nTipoCod','cTipoDesc')->get();
    	return view("subtipo.edit",compact("stip","tipo"));
    }

    public function destroy($id)
    {
        $subtipo=subtipo::where('nSTipCod','=',$id);
        $subtipo->delete();
        return back()->with('info','El subtipo fue eliminado.');
    }

    public function create()
    {
    	$tipo=tipo::select('nTipoCod','cTipoDesc')->get();
    	return view("subtipo.create",compact('tipo'));
    }
}
