@extends('backend.layouts.appv2')

@section('subtitulo', 'Edición de Sub-Tipo')

@section('content')

<link href="{{ asset('css/form.css') }}" rel="stylesheet">

<div class="row">
	<div class="col-sm-12">
		<section class="content">
		    <div class="box box-info">
		        <div class="box-header with-border">
		            <h3 class="box-title">@yield('subtitulo') | {{ $stip->cSTipDes }}</h3>
		            <div class="box-tools pull-right">
		                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
		            </div><!-- /.box tools -->
		        </div><!-- /.box-header -->
		        <div class="box-body">		           
		            <form action="{{ route('subtipo.update',$stip->nSTipCod) }}" method="POST">
						{{ csrf_field() }}
						<input type="hidden" name="_method" value="PUT">
		                <div class="form-group">
			                <div class="row">		
			                	<div class="col-md-6">			                                    					
                					<select id="tipo_id" name="tipo_id" class="form-control">
	                					@foreach($tipo as $tip)
	                						@if($stip->nTipoCod == $tip->nTipoCod)
	                							<option value="{{$tip->nTipoCod}}" selected="selected">{{$tip->cTipoDesc}}</option>
	                						@else
	                							<option value="{{$tip->nTipoCod}}">{{$tip->cTipoDesc}}</option>
	                						@endif
	                					@endforeach
                					</select>              				
			                    </div>	                	
			                	<div class="col-md-6">
			                    	<input class="form-control" type="text" name="sdesc" id="sdesc" placeholder="Nombre" value="{{ $stip->cSTipDes }}" maxlength="255" tabindex="1" autofocus="autofocus">
			                    </div>
			                </div>
			            </div>

		                <button type="submit" class=" signbuttons btn btn-primary">Guardar</button> <a href="{{ redirect()->getUrlGenerator()->previous() }}" class=" signbuttons btn btn-primary">Cancelar</a>
		            </form>

		        </div><!-- /.box-body -->
		    </div><!--box box-success-->
		</section>
	</div>
</div>
    
@endsection

