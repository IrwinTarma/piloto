<div class="form-group">
    {!! Form::label('cClieTdoc', 'Tipo de Doc.') !!}
    {!! Form::text('cClieTdoc', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('cClieNdoc', 'Número de Doc.') !!}
    {!! Form::text('cClieNdoc', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('cClieDesc', 'Descripción (Nombre/Razón Social)') !!}
    {!! Form::text('cClieDesc', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('cClieDirec', 'Dirección') !!}
    {!! Form::text('cClieDirec', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('cClieObs', 'OBSERVACION') !!}
    {!! Form::textarea('cClieObs', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit('ENVIAR',  ['class' => 'btn btn-primary']) !!}
</div>