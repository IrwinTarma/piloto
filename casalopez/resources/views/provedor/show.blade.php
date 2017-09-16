@extends('layouts.app')
@section('subtitulo', 'Proveedor')

@section('content')

@foreach($provedor as $prove)
@endforeach
<link href="{{ asset('css/form.css') }}" rel="stylesheet">
<div class="row col-md-8 col-md-offset-2 registeration">    
<div class="registerInner">
        <div class="col-md-12 signUp">
            <h3 class="headerSign">@yield('subtitulo') | {{ $prove->cProvNom }}</h3>
                <div class="form-group">
	                <div class="row">
	                	<div class="col-md-4">
	                    	<input class="form-control" type="text" name="ruc" RUCd="ruc" placeholder="RUC" value="{{ $prove->nProvRuc }}" disabled="disabled" value="" maxlength="11">
	                	</div>
	                	<div class="col-md-8">
	                    	<input class="form-control" type="text" name="nombre" id="nombre" placeholder="NOMBRE" value="{{ $prove->cProvNom }}" disabled="disabled">
	                    </div>
	                </div>
	            </div>

	            <div class="form-group">
	                <input class="form-control" type="text" name="dir" id="dir" placeholder="DIRECCION" value="{{ $prove->cProvDir }}" disabled="disabled">	                    
	            </div>

                <div class="form-group">
	                <div class="row">
	                	<div class="col-md-6">                
	                    	<input class="form-control" type="text" name="email" id="email" placeholder="EMAIL" value="{{ $prove->cProvEma }}" disabled="disabled">
	                    </div>
	                	<div class="col-md-3">
	                    	<input class="form-control" type="text" name="tel" id="tel" placeholder="TELEFONO" value="{{ $prove->cProvTel }}" disabled="disabled" value="" maxlength="11"> 
	              		</div>     
	                 	<div class="col-md-3">
	                    	<input class="form-control" type="text" name="cel" id="cel" placeholder="CELULAR" value="{{ $prove->cProvCel }}" disabled="disabled" value="" maxlength="11">
	                    </div>           	                    
	                </div>
                </div>

                <div class="form-group">
                	<textarea class="form-control" rows="5" id="obs" name="obs" placeholder="OBSERVACION" disabled="disabled">{{ $prove->cProvObs }}</textarea>
                </div>

                <!--div class="form-group">
                    <label for="birthday" class="darktext">Birthday</label>
                    <input class="form-control" type="date" name="birthday" id="birthday" value="">
                </div-->
                
                <a href="{{ route('provedor.edit',$prove->nProvCod) }}" class=" signbuttons btn btn-primary">Editar</a> <a href="{{ route('provedor.index') }}" class=" signbuttons btn btn-primary">Listado</a>
            </form>

        </div>
             
</div>
        
</div>

@endsection