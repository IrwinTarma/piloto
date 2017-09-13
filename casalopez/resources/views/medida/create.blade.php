@extends('backend.layouts.appv2')

@section('subtitulo', 'Nueva Medida')

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
		            @include('medida.fragment.error')

		            <form action="{{ route('medida.store') }}" method="POST">
						{{ csrf_field() }}
						<input type="hidden" name="_method" value="POST">
		                <div class="form-group">
			                <div class="row">
			                	<div class="col-md-4">
			                    	<input class="form-control" type="text" name="nombre" RUCd="nombre" placeholder="Nombre" value="" maxlength="255" onkeypress="return tabular(event,this)" autofocus="autofocus" tabindex="1">
			                	</div>
			                	<div class="col-md-8">
			                    	<input class="form-control" type="text" name="desc" id="desc" placeholder="Descripción" value="" maxlength="255" tabindex="2">
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

@push('scripts')
	<script>
       function tabular(e,obj) {
         tecla=(document.all) ? e.keyCode : e.which;
         if(tecla!=13) return;
         frm=obj.form;
         for(i=0;i<frm.elements.length;i++)
           if(frm.elements[i]==obj) {
             if (i==frm.elements.length-1) i=-1;
             break }
         frm.elements[i+1].focus();
         return false;
       }

       if(!("autofocus" in document.createElement("input")))
           document.getElementById("uno").focus();
   </script>
@endpush('scripts')