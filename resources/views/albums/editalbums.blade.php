@extends('template')

@section('h1', 'Albums')

@section('form')
	<form method="POST" action="/albums/edit/{{$album->id}}">
		{{ csrf_field() }}
		{{ method_field('PATCH') }}
	  <div class="form-group">
	    <label for="album">Album Name</label>
	    <input type="text" class="form-control" name="album" id="album" placeholder="Album Name">
	    <p>Current value: {{ $album->album_name }}</p>
	  </div>
	  <div class="form-group">
	    <label for="year">Year</label>
	    <input type="text" class="form-control" name="year" id="year" placeholder="Year">
	    <p>Current value: {{ $album->year }}</p>
	  </div>
	  <div class="form-group">
	    <label for="genre">Genre</label>
	    <input type="text" class="form-control" name="genre" id="genre" placeholder="Genre">
	    <p>Current value: {{ $album->genre }}</p>
	  </div>
	  <div class="form-group">
	    <label for="artist">Year</label>
	  	<select class="custom-select" name="artist">
		  <option selected>Choose an artist</option>
		  @foreach($artist as $key => $val)
		  <option value="{{$val->id}}" {{$val->id == $album->artist_id ? 'selected':'' }}>
		  	{{$val->name}}</option>
		  @endforeach
		</select>
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
@endsection

