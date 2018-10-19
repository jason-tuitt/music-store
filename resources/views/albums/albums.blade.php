@extends('template')

@section('h1', 'Albums')

@section('form')
	<form method="POST" action="/albums/create">
		{{ csrf_field() }}
	  <div class="form-group">
	    <label for="album">Album Name</label>
	    <input type="text" class="form-control" name="album" id="album" placeholder="Album Name">
	  </div>
	  <div class="form-group">
	    <label for="year">Year</label>
	    <input type="text" class="form-control" name="year" id="year" placeholder="Year">
	  </div>
	  <div class="form-group">
	    <label for="genre">Genre</label>
	    <input type="text" class="form-control" name="genre" id="genre" placeholder="Genre">
	  </div>
	  <div class="form-group">
	    <label for="artist">Year</label>
	  	<select class="custom-select" name="artist">
		  <option selected>Choose an artist</option>
		  @foreach($artist as $key => $val)
		  <option value="{{$val->id}}">{{$val->name}}</option>
		  @endforeach
		</select>
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
@endsection

@section('table-content')
<div class="cardList"> 
	@foreach($album as $key => $val)
		<div class="cardListItem"> 
		<div class="card style="width: 18rem;">
		  <img class="card-img-top" src="{{asset('img/mic.jpg')}}" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">{{$val->album_name}}</h5>
		    <p class="card-text">{{$val->year}}</p>
		    <p class="card-text">{{$val->genre}}</p>
		    <p class="card-text">
		    {{-- @foreach($artist as $key2 => $val2)
		    	@if($val2->id == $val->artist_id)
		    		Artist: {{$val2->name}}
		    	@endif
		    @endforeach --}}
		    {{ $val->artist->name }}
		    </p>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <div style="display:flex;">

		    <a href="/albums/edit/{{ $val->id }}" class="btn btn-outline-primary">Edit</a>

		    <form method="POST" action="/albums/delete/{{$val->id}}">
		    	{{ csrf_field() }}
				{{ method_field("DELETE") }}
		    	<button type="submit" class="btn btn-outline-primary">Delete</button>	
		    </form>
		    </div>
		  </div>
		</div>
		</div>
	@endforeach
</div>
@endsection