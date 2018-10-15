@extends('template')

@section('h1', 'Albums')

@section('table-content')

	@component('table')
		@slot('head')
			Albumss
		@endslot
			Album
	@endcomponent

@endsection