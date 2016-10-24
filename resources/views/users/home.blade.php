@extends('layouts.master')

@section('content')
	<h3>Homepage for user: {{ \Auth::user()->firstName . " " . \Auth::user()->lastName }}</h3>
@endsection