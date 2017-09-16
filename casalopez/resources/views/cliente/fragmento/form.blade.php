
<div class="form-group">
    <div class="row">
        <div class="col-md-4 {{ $errors->has('tipodoc_id') ? 'has-error' :'' }}">             
            <!-- {!! Form::select('nTdocCod', $tipodoc, null, ['placeholder' => 'Pick a size...']) !!} -->
            <select id="tipodoc_id" name="tipodoc_id" class="form-control">
                @foreach($tipodoc as $tb)
                    <option value= {{$tb->nTdocCod}}>{{$tb->cTdocSigla}}</option>
                @endforeach
            </select>
            {!! $errors->first('tipodoc_id','<span class="help-block">:message</span>') !!}
        </div>
        <div class="col-md-8 {{ $errors->has('cClieNdoc') ? 'has-error' :'' }}">
             {!! Form::text('cClieNdoc', null, ['class' => 'form-control', 'placeholder'=>'Número de Doc.', 'value'=>"{{ old('cClieNdoc') }}"]) !!}
             {!! $errors->first('cClieNdoc','<span class="help-block">:message</span>') !!}
        </div>
    </div>
</div>

<div class="form-group {{ $errors->has('cClieDesc') ? 'has-error' :'' }}">
    {!! Form::text('cClieDesc', null, ['class' => 'form-control', 'placeholder'=>'Descripción (Nombre/Razón Social)', 'value'=>"{{ old('cClieDesc') }}"]) !!}
    {!! $errors->first('cClieDesc','<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('cClieDirec') ? 'has-error' :'' }}">
    {!! Form::text('cClieDirec', null, ['class' => 'form-control', 'placeholder'=>'Dirección', 'value'=>"{{ old('cClieDirec') }}"] ) !!}
    {!! $errors->first('cClieDirec','<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('cClieObs') ? 'has-error' :'' }}">
    {!! Form::textarea('cClieObs', null, ['class' => 'form-control', 'placeholder'=>'Observación', 'value'=>"{{ old('cClieDirec') }}", 'rows'=>'5'] ) !!}
    {!! $errors->first('cClieObs','<span class="help-block">:message</span>') !!}
</div>

