@extends('layouts.app')
@section('title', 'Cliente')
@section('encabezado', 'Editar Cliente')
@section('content')

<div class="row col-md-8 col-md-offset-2 registeration">
    
<div class="registerInner">
        <div class="col-md-12 signUp">
            <h3 class="headerSign">
                @yield('encabezado')
                <a href="{{ route('cliente.index')}}" class="btn btn-default pull-right">Listado</a>
            </h3>
            
            <!-- @include('cliente.fragmento.error') -->

            {{!! Form:model($clientes, ['route' =>['cliente.update', $clientes->nClieCod], 'method' => 'PUT'] !!}}

                @include('cliente.fragmento.form')

            {{!! Form:close() !!}}
        </div>
        <div class="col-sm-4">
            @include('cliente.fragmento.aside')
        </div>
             
</div>
        
</div>

@endsection