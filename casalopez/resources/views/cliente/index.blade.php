@extends('backend.layouts.appv2')

@section('title', 'Listado de Clientes')
@section('content')

	<div class="row">
		<div class="col-sm-12">
			<section class="content">
			    <div class="box box-info">
			        <div class="box-header with-border">
			            <h3 class="box-title">@yield('title')</h3>
			            <div class="box-tools pull-right">
			                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
			            </div><!-- /.box tools -->
			        </div><!-- /.box-header -->
			        <div class="box-body">
			            
			            <a href="{{ route('cliente.create') }}" class="btn btn-primary btn-xs" title="Agregar Tipo">
			            	<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
			            </a>
						 <br>
	                        <br>
						@include('tipo.fragment.info')
						<table class="table table-hover table-striped">
							<thead>
								<tr>
									<th width="20px">ID</th>																									
									<th>TIPO DOC.</th>
									<th>NUM. DOC.</th>
									<th>DESCRIPCION (Nombre/Razón Social)</th>
									<th>OBSERVACION</th>								
									<th colspan="3">ACCIONES</th>
								</tr>
							</thead>
							<tbody style="text-align: center;">
								@foreach($cliente as $tcliente)
								<tr>
									<td>{{ $tcliente->nClieCod }}</td>
									<td>{{ $tcliente->tipodoc->cTdocSigla }}</td>
									<td>{{ $tcliente->cClieNdoc }}</td>
									<td>{{ $tcliente->cClieDirec }}</td>
									<td>
										<p style="font-size: 9px;">(Obs. {{ $tcliente->cClieObs }})</p>
									</td>									
									<td>
										<a href="{{ route('cliente.show',$tcliente->nClieCod) }}" class="btn btn-xs btn-info">
											<i class="fa fa-search" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"></i>
										</a> 
										<a href="{{ route('cliente.edit',$tcliente->nClieCod) }}" class="btn btn-xs btn-primary">
											<i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"></i>
										</a>

										<a data-method="delete" data-trans-button-cancel="Cancel" data-trans-button-confirm="Delete" data-trans-title="Are you sure?" class="btn btn-xs btn-danger" style="cursor:pointer;" onclick="$(this).find(&quot;form&quot;).submit();">
											<i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"></i>
											
											<form action="{{ route('cliente.destroy',$tcliente->nClieCod) }}" method="POST" name="delete_item" style="display:none">
											   {{ csrf_field() }}
												<input type="hidden" name="_method" value="DELETE">
											    <!--input type="hidden" name="_token" value="MAkHFJSuu2TYPiebIcKDFTy53mpZB3g3TGN9svAi"-->
											</form>
										</a>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
						{!! $cliente->render() !!}
						
			        </div><!-- /.box-body -->
			    </div><!--box box-success-->
			</section>
		</div>
	</div>

@endsection