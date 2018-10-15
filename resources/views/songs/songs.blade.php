@extends('template')

@section('h1', 'Songs')

@section('table-content')

	@component('table')
		@slot('head')
			Songss
		@endslot
		Song

	@endcomponent

@endsection

