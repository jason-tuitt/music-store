@extends('template')

@section('h1', 'Artists')

@section('name')
	@foreach($arrays as $array)
		<h1>{{ $array }}</h1>
	@endforeach
@endsection

@section('table-content')

	@component('table')
		@slot('head')
			Artistss
		@endslot
		Artist

	@endcomponent

@endsection