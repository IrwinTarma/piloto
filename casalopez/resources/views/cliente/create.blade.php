@extends('layouts.app')
@section('title', 'Cliente')
@section('encabezado', 'Nuevo Cliente')
@section('content')

<div class="row col-md-8 col-md-offset-2 registeration">
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
</div>

@endsection