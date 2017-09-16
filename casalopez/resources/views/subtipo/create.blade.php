@extends('backend.layouts.appv2')

@section('subtitulo', 'Nuevo Sub-Tipo')

@section('content')

    {!!Html::script('select2-4.0.3/dist/js/select2.js')!!}
    {!!Html::style('select2-4.0.3/dist/css/select2.css',['rel'=>"stylesheet"])!!}

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
		            @include('subtipo.fragment.error')

		            <form action="{{ route('subtipo.store') }}" method="POST">
						{{ csrf_field() }}
						<input type="hidden" name="_method" value="POST">
		                <div class="form-group">
			                <div class="row">			                	
			                	<div class="col-md-6">
                					<select id="tipo_id" name="tipo_id" class="form-control">
                					@foreach($tipo as $tip)
                						<option value="{{$tip->nTipoCod}}">{{$tip->cTipoDesc}}</option>
                					@endforeach
                					</select>              				
			                    </div>
			                	<div class="col-md-6">
			                    	<input class="form-control" type="text" name="sdesc" id="sdesc" placeholder="Nombre" value="" maxlength="255" tabindex="1" autofocus="autofocus">
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

@push('script')

<script type="text/javascript">
	$("#tipo_id").select2({});	
</script>

@endpush('script')