@extends('template')

@section('h1', 'Artists')

@section('name')
	@if(count($b5nc_girls) < 10)
		<ul>
		@foreach($b5nc_girls as $girl => $info)
			<li>name => {{ $girl }}</li>
			<li>age => {{ $info['age'] }}</li>
			<li>address => {{ $info['address'] }}</li>
			<br>
		@endforeach
		</ul>
	@endif

	<br>
	<ul>
	@foreach($b5nc_boys as $boy)
		<li>{{ $boy }}</li>
	@endforeach
	</ul>

	{{-- {{ dd($) }} --}}
	{{-- {{ dd($b5nc_girls) }} --}}
@endsection


@section('table-content')

	@component('table')
		@slot('head')
			Artistss
		@endslot
		Artist

	@endcomponent

@endsection