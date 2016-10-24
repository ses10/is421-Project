@extends('layouts.master')

@section('content')
  <h2>Register</h2>
  @if(count($errors))
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
          <li> {{ $error }} </li>
        @endforeach
      </ul>
    </div>
  @endif  
  {!! Form::open(array('route' => 'users.store')) !!}
    <div class="form-group">
        {!! Form::label('username', 'Username') !!}
        {!! Form::text('username', null, array('class' => 'form-control')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('First Name') !!}
        {!! Form::text('firstName', null, array('class' => 'form-control')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Last Name') !!}
        {!! Form::text('lastName', null, array('class' => 'form-control')) !!}
    </div>
    <div class="form-group">
      {!! Form::label('password') !!}
      {!! Form::password('password', array('class' => 'form-control')) !!}
    </div>
    {!! Form::token() !!}
    {!! Form::submit(null, array('class' => 'btn btn-default')) !!}
  {!! Form::close() !!}
@endsection