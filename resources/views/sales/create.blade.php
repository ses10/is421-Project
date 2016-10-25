@extends('layouts.master')

@section('content')

  <h2>Start New Sale</h2>

  {!! Form::open(array('route' => 'sales.store')) !!}
    <div class="form-group">
        {!! Form::label('vin', 'VIN#') !!}
        {!! Form::text('vin', null, array('class' => 'form-control')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Year') !!}
        {!! Form::text('year', null, array('class' => 'form-control')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Make') !!}
        {!! Form::text('make', null, array('class' => 'form-control')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Model') !!}
        {!! Form::text('model', null, array('class' => 'form-control')) !!}
    </div>
    {!! Form::token() !!}
    {!! Form::submit(null, array('class' => 'btn btn-default')) !!}
  {!! Form::close() !!}
@endsection