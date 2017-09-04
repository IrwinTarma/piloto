@extends('layouts.app')
@section('title', 'Clientes')
@section('encabezado', 'Listado de Clientes')

@section('content')
	<div class="col-sm-12">
		<h3>
			@yield('encabezado')
			<a href="" class="btn btn-primary pull-right">Nuevo</a>	
		</h3>

		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th width="20px">ID</th>
					<th>TIPO DOC.</th>
					<th>NUM. DOC.</th>
					<th>DESCRIPCION (Nombre/Razón Social)</th>
					<th>DIRECCION</th>
					<th>OBSERVACION</th>
					<th colspan="3">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
			</tbody>
		</table>

	</div>	
@endsection