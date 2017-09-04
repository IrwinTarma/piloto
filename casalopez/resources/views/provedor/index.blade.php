@extends('layouts.app')
@section('title', 'Listado de Proveedores')
@section('content')

	<div class="col-sm-12">
			<h2>
				@yield('title')
				<a href="{{ route('provedor.create') }}" class="btn btn-primary pull-right">Nuevo</a>	
			</h2>
			<table class="table table-hover table-striped">
				<thead>
					<tr>
						<th width="20px">ID</th>
						<th>RUC</th>
						<th>PROVEEDOR</th>
						<th>DIRECCION</th>
						<th>CORREO</th>
						<th>TELEFONO</th>
						<th>CELULAR</th>
						<th colspan="3">&nbsp;</th>
					</tr>
				</thead>
				<tbody>
					@foreach($provedors as $prov)
					<tr>
						<td>{{ $prov->nProvCod }}</td>
						<td>{{ $prov->nProvRuc }}</td>
						<td>
						<strong>{{ $prov->cProvNom }}</strong>
						<p style="font-size: 9px;">(Obs. {{ $prov->cProvObs }})</p>
						</td>
						<td>{{ $prov->cProvDir }}</td>
						<td>{{ $prov->cProvEma }}</td>
						<td>{{ $prov->cProvTel }}</td>
						<td>{{ $prov->cProvCel }}</td>
						<td>
						<a href="{{ route('provedor.show',$prov->nProvCod) }}">Ver</a>
						</td>
						<td>
						<a href="{{ route('provedor.edit',$prov->nProvCod) }}">Editar</a>
						</td>
						<td>borrar</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			{!! $provedors->render() !!}

	</div>
		
@endsection