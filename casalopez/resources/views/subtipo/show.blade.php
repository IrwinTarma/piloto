@extends('backend.layouts.appv2')
@section('subtitulo', 'Sub-Tipo')
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
	                <div class="form-group">
		                <div class="row">
		                	<div class="col-md-6">			                                    					
                					<select id="tipo_id" name="tipo_id" class="form-control" disabled="disabled">
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
		                    	<input class="form-control" type="text" name="sdesc" id="sdesc" placeholder="Nombre" value="{{ $stip->cSTipDes }}" disabled="disabled">
		                    </div>
		                </div>
		            </div>

	                <a href="{{ route('subtipo.edit',$stip->nSTipCod) }}" class=" signbuttons btn btn-primary">Editar</a> <a href="{{ route('subtipo.index') }}" class=" signbuttons btn btn-primary">Listado</a>
		          
		        </div><!-- /.box-body -->
		    </div><!--box box-success-->
		</section>
	</div>
</div>

@endsection