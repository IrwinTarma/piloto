@extends('layouts.app')
@section('title', 'Registrar Cliente')
@section('content')

<div class="row col-md-8 col-md-offset-2 registeration">
    
<div class="registerInner">
        <div class="col-md-12 signUp">
            <h3 class="headerSign">@yield('title')</h3>
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

                <!--div class="form-group">
                    <label for="birthday" class="darktext">Birthday</label>
                    <input class="form-control" type="date" name="birthday" id="birthday" value="">
                </div-->

                <button type="submit" class=" signbuttons btn btn-primary">Guardar</button>
                <button type="submit" class=" signbuttons btn btn-default">Cancelar</button>

            </form>
        </div>
             
</div>
        
</div>

@endsection