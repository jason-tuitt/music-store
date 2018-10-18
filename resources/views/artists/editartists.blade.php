@extends('template')

@section('h1', 'Artists')

@section('form')
	<form method="POST" action="/artists/edit/update">
		{{ csrf_field() }}
		{{ method_field('PATCH') }}
	  <div class="form-group">
	  	<input hidden type="" name="id" value={{ $artist->id }}>
	    <label>Edit Artist Name</label>
	    <input type="text" class="form-control" name="newartist" placeholder="Artist Name">
	    <p>Current name: {{ $artist->name }}</p>
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
@endsection