<div class="form-group">
    <div class="row">
        <div class="col-md-4">
            <!--input class="form-control" type="text" name="ruc" RUCd="ruc" placeholder="RUC" value="" maxlength="11"-->
            {!! Form::text('cClieTdoc', null, ['class' => 'form-control', 'placeholder'=>'Tipo de Doc.']) !!}
        </div> 
        <div class="col-md-8">
             {!! Form::text('cClieNdoc', null, ['class' => 'form-control', 'placeholder'=>'Número de Doc.']) !!}
        </div>
    </div>
</div>

<div class="form-group">
  <!--   {!! Form::label('cClieDesc', 'Descripción (Nombre/Razón Social)') !!} -->
    {!! Form::text('cClieDesc', null, ['class' => 'form-control', 'placeholder'=>'Descripción (Nombre/Razón Social)']) !!}
</div>

<div class="form-group">
    {!! Form::text('cClieDirec', null, ['class' => 'form-control', 'placeholder'=>'Dirección']) !!}
</div>

<div class="form-group">
    {!! Form::textarea('cClieObs', null, ['class' => 'form-control', 'placeholder'=>'Observación', 'rows'=>'5'] ) !!}
</div>

<div class="form-group">
    {!! Form::submit('ENVIAR',  ['class' => 'btn btn-primary']) !!}
</div>