
@extends('layouts.app')
@section('subtitulo', 'Nuevo Proveedor')

@section('content')


<link href="{{ asset('css/form.css') }}" rel="stylesheet">
<div class="row col-md-8 col-md-offset-2 registeration">    
<div class="registerInner">
        <div class="col-md-12 signUp">
            <h3 class="headerSign">@yield('subtitulo')</h3>

            @include('provedor.fragment.error')

            <form action="{{ route('provedor.store') }}" method="POST">
				{{ csrf_field() }}
				<input type="hidden" name="_method" value="POST">
                <div class="form-group">
	                <div class="row">
	                	<div class="col-md-4">
	                    	<input class="form-control" type="text" name="ruc" RUCd="ruc" placeholder="RUC" value="" maxlength="11">
	                	</div>
	                	<div class="col-md-8">
	                    	<input class="form-control" type="text" name="nombre" id="nombre" placeholder="NOMBRE" value="">
	                    </div>
	                </div>
	            </div>

	            <div class="form-group">
	                <input class="form-control" type="text" name="dir" id="dir" placeholder="DIRECCION" value="">	                    
	            </div>

                <div class="form-group">
	                <div class="row">
	                	<div class="col-md-6">                
	                    	<input class="form-control" type="text" name="email" id="email" placeholder="EMAIL" value="">
	                    </div>
	                	<div class="col-md-3">
	                    	<input class="form-control" type="text" name="tel" id="tel" placeholder="TELEFONO" value="" maxlength="11">
	              		</div>     
	                 	<div class="col-md-3">
	                    	<input class="form-control" type="text" name="cel" id="cel" placeholder="CELULAR" value="" maxlength="11">
	                    </div>           	                    
	                </div>
                </div>

                <div class="form-group">
                	<textarea class="form-control" rows="5" id="obs" name="obs" placeholder="OBSERVACION"></textarea>
                </div>

                <button type="submit" class=" signbuttons btn btn-primary">Guardar</button> <a href="{{ redirect()->getUrlGenerator()->previous() }}" class=" signbuttons btn btn-primary">Cancelar</a>
            </form>

        </div>
             
</div>
        
</div>

@endsection