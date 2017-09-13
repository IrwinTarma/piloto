@extends('backend.layouts.appv2')

@section('subtitulo', 'Nuevo Tipo')

@section('content')


<link href="{{ asset('css/form.css') }}" rel="stylesheet">

<div class="row">
	<div class="col-sm-12">
		<section class="content">
		    <div class="box box-info">
		        <div class="box-header with-border">
		            <h3 class="box-title">@yield('subtitulo')</h3>
		            <div class="box-tools pull-right">
		                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
		            </div><!-- /.box tools -->
		        </div><!-- /.box-header -->
		        <div class="box-body">
		            @include('tipo.fragment.error')

		            <form action="{{ route('tipo.store') }}" method="POST">
						{{ csrf_field() }}
						<input type="hidden" name="_method" value="POST">
		                <div class="form-group">
			                <div class="row">			                	
			                	<div class="col-md-8">
			                    	<input class="form-control" type="text" name="desc" id="desc" placeholder="Nombre" value="" maxlength="255" tabindex="2">
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
