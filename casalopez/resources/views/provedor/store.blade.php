@extends('layouts.app')

@section('content')

<div class="row col-md-8 col-md-offset-2 registeration">
    
<div class="registerInner">
        <div class="col-md-12 signUp">
            <h3 class="headerSign">Registrar Proveedor</h3>
            <form action="" method="post">

                <div class="form-group">
	                <div class="row">
	                	<div class="col-md-4">
	                    	<input class="form-control" type="text" name="ruc" RUCd="ruc" placeholder="RUC">
	                	</div>
	                	<div class="col-md-8">
	                    	<input class="form-control" type="text" name="nombre" id="nombre" placeholder="NOMBRE">
	                    </div>
	                </div>
	            </div>

	            <div class="form-group">
	                <input class="form-control" type="text" name="dir" id="dir" placeholder="DIRECCION">	                    
	            </div>

                <div class="form-group">
	                <div class="row">
	                	<div class="col-md-6">                
	                    	<input class="form-control" type="text" name="email" id="email" placeholder="EMAIL">
	                    </div>
	                	<div class="col-md-3">
	                    	<input class="form-control" type="text" name="tel" id="tel" placeholder="TELEFONO">
	              		</div>     
	                 	<div class="col-md-3">
	                    	<input class="form-control" type="text" name="cel" id="cel" placeholder="CELULAR">
	                    </div>           	                    
	                </div>
                </div>

                <div class="form-group">
                	<textarea class="form-control" rows="5" id="obs" name="obs" placeholder="OBSERVACION" value=""></textarea>
                </div>

                <!--div class="form-group">
                    <label for="birthday" class="darktext">Birthday</label>
                    <input class="form-control" type="date" name="birthday" id="birthday" value="">
                </div-->

                <button type="submit" class=" signbuttons btn btn-primary">Guardar</button>

            </form>
        </div>
             
</div>
        
</div>

@endsection