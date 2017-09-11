<div class="form-group">
    <div class="row">
        <div class="col-md-4 {{ $errors->has('cClieTdoc') ? 'has-error' :'' }}">
            {!! Form::text('cClieTdoc', null, ['class' => 'form-control', 'placeholder'=>'Tipo de Doc.', 'disabled']) !!}
            {!! $errors->first('cClieTdoc','<span class="help-block">:message</span>') !!}
        </div> 
        <div class="col-md-8 {{ $errors->has('cClieNdoc') ? 'has-error' :'' }}">
             {!! Form::text('cClieNdoc', null, ['class' => 'form-control', 'placeholder'=>'Número de Doc.', 'disabled']) !!}
             {!! $errors->first('cClieNdoc','<span class="help-block">:message</span>') !!}
        </div>
    </div>
</div>

<div class="form-group {{ $errors->has('cClieDesc') ? 'has-error' :'' }}">
    {!! Form::text('cClieDesc', null, ['class' => 'form-control', 'placeholder'=>'Descripción (Nombre/Razón Social)', 'disabled']) !!}
    {!! $errors->first('cClieDesc','<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('cClieDirec') ? 'has-error' :'' }}">
    {!! Form::text('cClieDirec', null, ['class' => 'form-control', 'placeholder'=>'Dirección', 'disabled']) !!}
    {!! $errors->first('cClieDirec','<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('cClieObs') ? 'has-error' :'' }}">
    {!! Form::textarea('cClieObs', null, ['class' => 'form-control', 'placeholder'=>'Observación', 'disabled', 'rows'=>'5'] ) !!}
    {!! $errors->first('cClieObs','<span class="help-block">:message</span>') !!}
</div>

