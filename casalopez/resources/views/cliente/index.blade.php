@extends('layouts.app')
@section('title', 'Clientes')
@section('encabezado', 'Listado de Clientes')

@section('content')
	<div class="col-sm-12">
		<h3>
			@yield('encabezado')
			<a href="{{ route('cliente.create')}}" class="btn btn-primary pull-right">Nuevo</a>	
		</h3>
		@include('cliente.fragmento.info')
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
				@foreach($cliente as $tcliente)
				<tr>
					<td>{{ $tcliente->nClieCod }}</td>
					<td>{{ $tcliente->cClieTdoc }}</td>
					<td>{{ $tcliente->cClieNdoc }}</td>
					<td>{{ $tcliente->cClieDesc }}</td>
					<td>{{ $tcliente->cClieDirec }}</td>
					<td>
						<p style="font-size: 9px;">(Obs. {{ $tcliente->cClieObs }})</p>
					</td>
					<td>
					<a href="{{ route('cliente.show',$tcliente->nClieCod) }}">Ver</a>
					</td>
					<td>
					<a href="{{ route('cliente.edit',$tcliente->nClieCod) }}">Editar</a>
					</td>
					<td>Borrar</td>
				</tr>
				@endforeach			
			</tbody>
		</table>
		{!! $cliente->render() !!}
	</div>
	<div class="col-sm-4">
		@include('cliente.fragmento.aside')
	</div>
@endsection