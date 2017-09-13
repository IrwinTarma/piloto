@extends('backend.layouts.appv2')
@section('subtitulo', 'Medida')
@section('content')

<link href="{{ asset('css/form.css') }}" rel="stylesheet">

<div class="row">
	<div class="col-sm-12">
		<section class="content">
		    <div class="box box-info">
		        <div class="box-header with-border">
		            <h3 class="box-title">@yield('subtitulo') | {{ $med->cMedNom }}</h3>
		            <div class="box-tools pull-right">
		                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
		            </div><!-- /.box tools -->
		        </div><!-- /.box-header -->
		        <div class="box-body">
	                <div class="form-group">
		                <div class="row">
		                	<div class="col-md-4">
		                    	<input class="form-control" type="text" name="nombre" RUCd="nombre" placeholder="Nombre" value="{{ $med->cMedNom }}" disabled="disabled" value="">
		                	</div>
		                	<div class="col-md-8">
		                    	<input class="form-control" type="text" name="desc" id="desc" placeholder="Descripción" value="{{ $med->cMedDesc }}" disabled="disabled">
		                    </div>
		                </div>
		            </div>

	                <a href="{{ route('medida.edit',$med->nMedCod) }}" class=" signbuttons btn btn-primary">Editar</a> <a href="{{ route('medida.index') }}" class=" signbuttons btn btn-primary">Listado</a>
		          
		        </div><!-- /.box-body -->
		    </div><!--box box-success-->
		</section>
	</div>
</div>

@endsection