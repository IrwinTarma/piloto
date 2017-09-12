@extends('layouts.app')
@section('title', 'Cliente')
@section('encabezado', 'Registrar Clientes')
@section('content')

<div class="row col-md-8 col-md-offset-2 registeration">
<<<<<<< HEAD
    
<div class="registerInner">
        <div class="col-md-12 signUp">
            <h3 class="headerSign">@yield('encabezado')</h3>
            <form action="" method="post">

                <div class="form-group">
	                <div class="row">
	                	<div class="col-md-4">
	                    	<input class="form-control" type="text" name="tdoc" id="tdoc" placeholder="Tipo de Doc.">
	                	</div>
	                	<div class="col-md-8">
	                    	<input class="form-control" type="text" name="ndoc" id="ndoc" placeholder="Número de Doc.">
	                    </div>
	                </div>
	            </div>

	            <div class="form-group">
	                <input class="form-control" type="text" name="ncli" id="ncli" placeholder="Descripción (Nombre/Razón Social)">	                    
	            </div>

                <div class="form-group">
					<input class="form-control" type="text" name="direccion" id="direccion" placeholder="Dirección ">	
                </div>

                <div class="form-group">
                	<textarea class="form-control" rows="5" id="obs" name="obs" placeholder="OBSERVACION" value=""></textarea>
                </div>

                <button type="submit" class=" signbuttons btn btn-primary">Guardar</button>
                <button type="submit" class=" signbuttons btn btn-default">Cancelar</button>

            </form>
        </div>
             
</div>
        
=======
    <div class="registerInner">
            <div class="col-md-8">
                <h3 class="headerSign">
                    @yield('encabezado')
                    <a href="{{ route('cliente.index') }}" class="btn btn-default pull-right">Listado</a>
                </h3>

                {!! Form::open(['route' => 'cliente.store']) !!}
                    {{ csrf_field() }}
                    
                    @include('cliente.fragmento.form')
                    <div class="form-group">
                        {!! Form::submit('ENVIAR',  ['class' => 'btn btn-primary']) !!}
                    </div>

                {!! Form::close() !!}

            </div>
            <!--div class="col-sm-4">
                @include('cliente.fragmento.aside')



            </div-->             
    </div>
>>>>>>> cc011c2615d34e8c63ba59c3204dc8c80a969094
</div>

@endsection