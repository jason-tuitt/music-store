@extends('template')

@section('h1', 'Edit Songs')

@section('form')
	<form method="POST" action="/songs/edit/update">
		{{ csrf_field() }}
		{{ method_field('PATCH') }}
		<input hidden type="" name="id" value={{ $song->id }}>
	  <div class="form-group">
	    <label for="song">Song Name</label>
	    <input type="text" class="form-control" name="song" id="song" placeholder="Song Name">
	    <p>Current Value: {{ $song->song_name }}</p>
	  </div>
	  <div class="form-group">
	    <label for="year">Length</label>
	    <input type="text" class="form-control" name="length" id="length" placeholder="Length">
	    <p>Current Value: {{ $song->length }}</p>
	  </div>
	  <div class="form-group">
	    <label for="album">Album</label>
	  	<select class="custom-select" name="album">
		  @foreach($album as $key => $val)
		  <option value="{{$val->id}}" {{$val->id == $song->album_id ? 'selected':'' }}>{{$val->album_name}}</option>
		  @endforeach
		</select>
	  </div>
	 {{--  <div class="form-group">
	    <label for="artist">Artist</label>

	  	<select class="custom-select" name="artist">
		  <option value="0" selected>Choose an artist</option>
		  @foreach($artist as $key => $val)
		  <option value="{{$val->id}}" {{$val->id == $song->artist_id ? 'selected':'' }}>{{$val->name}}</option>
		  @endforeach
		</select>

	  </div> --}}
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
@endsection