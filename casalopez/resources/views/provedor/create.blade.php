@extends('backend.layouts.appv2')

@section('subtitulo', 'Nuevo Proveedor')

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

    			</div><!-- /.box-body -->
		    </div><!--box box-success-->
		</section>
	</div>
</div>

@endsection