@extends('backend.layouts.appv2')

@section('subtitulo', 'Nuevo Cliente')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <section class="content">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">@yield('subtitulo')</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div><!-- /.box tools -->
                </div><!-- /.box-header -->
                <div class="box-body">                   

                    {!! Form::open(['route' => 'cliente.store']) !!}
                        {{ csrf_field() }}
                        @include('cliente.fragmento.form')
                        {!! Form::submit('Guardar',  ['class' => 'btn btn-primary']) !!}
                        <a href="{{ redirect()->getUrlGenerator()->previous() }}" class=" signbuttons btn btn-primary">Cancelar</a>
                    
                    {!! Form::close() !!}
                </div><!-- /.box-body -->
            </div><!--box box-success-->
        </section>
    </div>
</div>

@endsection
