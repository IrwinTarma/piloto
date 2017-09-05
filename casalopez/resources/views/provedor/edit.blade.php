@extends('layouts.app')
@section('subtitulo', 'Edición de Proveedor')

@section('content')

@foreach($provedor as $prove)
@endforeach
<link href="{{ asset('css/form.css') }}" rel="stylesheet">
<div class="row col-md-8 col-md-offset-2 registeration">    
<div class="registerInner">
        <div class="col-md-12 signUp">
            <h3 class="headerSign">@yield('subtitulo') | {{ $prove->cProvNom }}</h3>
            <form action="{{ route('provedor.update',$prove->nProvCod) }}" method="POST">
				{{ csrf_field() }}
				<input type="hidden" name="_method" value="PUT">
                <div class="form-group">
	                <div class="row">
	                	<div class="col-md-4">
	                    	<input class="form-control" type="text" name="ruc" RUCd="ruc" placeholder="RUC" value="{{ $prove->nProvRuc }}" value="" maxlength="11">
	                	</div>
	                	<div class="col-md-8">
	                    	<input class="form-control" type="text" name="nombre" id="nombre" placeholder="NOMBRE" value="{{ $prove->cProvNom }}">
	                    </div>
	                </div>
	            </div>

	            <div class="form-group">
	                <input class="form-control" type="text" name="dir" id="dir" placeholder="DIRECCION" value="{{ $prove->cProvDir }}">	                    
	            </div>

                <div class="form-group">
	                <div class="row">
	                	<div class="col-md-6">                
	                    	<input class="form-control" type="text" name="email" id="email" placeholder="EMAIL" value="{{ $prove->cProvEma }}">
	                    </div>
	                	<div class="col-md-3">
	                    	<input class="form-control" type="text" name="tel" id="tel" placeholder="TELEFONO" value="{{ $prove->cProvTel }}" value="" maxlength="11">
	              		</div>     
	                 	<div class="col-md-3">
	                    	<input class="form-control" type="text" name="cel" id="cel" placeholder="CELULAR" value="{{ $prove->cProvCel }}" value="" maxlength="11">
	                    </div>           	                    
	                </div>
                </div>

                <div class="form-group">
                	<textarea class="form-control" rows="5" id="obs" name="obs" placeholder="OBSERVACION">{{ $prove->cProvObs }}</textarea>
                </div>

                <!--div class="form-group">
                    <label for="birthday" class="darktext">Birthday</label>
                    <input class="form-control" type="date" name="birthday" id="birthday" value="">
                </div-->

                <button type="submit" class=" signbuttons btn btn-primary">Guardar</button> <a href="{{ redirect()->getUrlGenerator()->previous() }}" class=" signbuttons btn btn-primary">Cancelar</a>
            </form>

        </div>
             
</div>
        
</div>

@endsection