@extends('backend.layouts.appv2')
@section('subtitulo', 'Tipo')
@section('content')

<link href="{{ asset('css/form.css') }}" rel="stylesheet">

<div class="row">
	<div class="col-sm-12">
		<section class="content">
		    <div class="box box-info">
		        <div class="box-header with-border">
		            <h3 class="box-title">@yield('subtitulo') | {{ $tip->cTipoDesc }}</h3>
		            <div class="box-tools pull-right">
		                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
		            </div><!-- /.box tools -->
		        </div><!-- /.box-header -->
		        <div class="box-body">
	                <div class="form-group">
		                <div class="row">
		                	<div class="col-md-8">
		                    	<input class="form-control" type="text" name="desc" id="desc" placeholder="Nombre" value="{{ $tip->cTipoDesc }}" disabled="disabled">
		                    </div>
		                </div>
		            </div>

	                <a href="{{ route('tipo.edit',$tip->nTipoCod) }}" class=" signbuttons btn btn-primary">Editar</a> <a href="{{ route('tipo.index') }}" class=" signbuttons btn btn-primary">Listado</a>
		          
		        </div><!-- /.box-body -->
		    </div><!--box box-success-->
		</section>
	</div>
</div>

@endsection