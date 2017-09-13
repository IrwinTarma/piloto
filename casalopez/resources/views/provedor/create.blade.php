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
			                    	<input class="form-control" type="text" name="ruc" RUCd="ruc" placeholder="RUC" value="" maxlength="11" onkeypress="return tabular(event,this)" autofocus="autofocus" tabindex="1">
			                	</div>
			                	<div class="col-md-8">
			                    	<input class="form-control" type="text" name="nombre" id="nombre" placeholder="NOMBRE" value="" maxlength="255" onkeypress="return tabular(event,this)" tabindex="2">
			                    </div>
			                </div>
			            </div>

			            <div class="form-group">
			                <input class="form-control" type="text" name="dir" id="dir" placeholder="DIRECCION" value="" maxlength="255" onkeypress="return tabular(event,this)" tabindex="3">	                    
			            </div>

		                <div class="form-group">
			                <div class="row">
			                	<div class="col-md-6">                
			                    	<input class="form-control" type="text" name="email" id="email" placeholder="EMAIL" value="" maxlength="255" onkeypress="return tabular(event,this)" tabindex="4">
			                    </div>
			                	<div class="col-md-3">
			                    	<input class="form-control" type="text" name="tel" id="tel" placeholder="TELEFONO" value="" maxlength="11" onkeypress="return tabular(event,this)" tabindex="5">
			              		</div>     
			                 	<div class="col-md-3">
			                    	<input class="form-control" type="text" name="cel" id="cel" placeholder="CELULAR" value="" maxlength="11" onkeypress="return tabular(event,this)" tabindex="6">
			                    </div>           	                    
			                </div>
		                </div>

		                <div class="form-group">
		                	<textarea class="form-control" rows="5" id="obs" name="obs" placeholder="OBSERVACION" maxlength="255" onkeypress="return tabular(event,this)" tabindex="7"></textarea>
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