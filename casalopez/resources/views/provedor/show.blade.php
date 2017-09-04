@extends('layouts.app')
@section('title', 'Listado de Proveedores')

<link href="{{ asset('css/mostrar.css') }}" rel="stylesheet">

@foreach($provedor as $prov)
@endforeach

@section('content')
	<div class="container">
      <div class="row">     
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">{{ $prov->cProvNom }}</h3>
            </div>
            <div class="panel-body">
              <div class="row">               
              
                <div class=" col-md-12 col-lg-12 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Ruc:</td>
                        <td>{{ $prov->nProvRuc }}</td>
                      </tr>
                      <tr>
                        <td>Dirección:</td>
                        <td>{{ $prov->cProvDir }}</td>
                      </tr>                      
                      <tr>
                        <td>Email:</td>
                        <td>{{ $prov->cProvEma }}</td>
                      </tr>
                      <tr>
                        <td>Teléfono:</td>
                        <td>{{ $prov->cProvTel }}</td>
                      </tr>
                      <tr>
                        <td>Celular:</td>
                        <td>{{ $prov->cProvCel }}</td>
                      </tr>
                      <tr>
                        <td>Observación:</td>
                        <td>{{ $prov->cProvObs }}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-list-alt"></i></a>
                        <span class="pull-right">
                        <a href="{{ route('provedor.edit',$prov->nProvCod) }}" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-pencil fa-5x"></i></a>
                        <form action="{{ route('provedor.destroy',$prov->nProvCod) }}" method="POST">
                        	{{ csrf_field() }}
                        	<input type="hidden" name="_method" value="DELETE">
                        	<button class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-globe fa-5x"></i></button>
                        </form>
                       
                    </span>
                </div>
            
          </div>
        </div>
      </div>
    </div>
@endsection


