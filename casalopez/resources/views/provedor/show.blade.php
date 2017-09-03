@extends('layouts.app')

@section('content')

	<div class="col-sm-12">
		<h2>
		
			@foreach($provedor as $prov)
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
				
			</tr>
			@endforeach

		</h2>
	</div>

@endsection