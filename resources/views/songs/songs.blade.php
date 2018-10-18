@extends('template')

@section('h1', 'Albums')

@section('form')
	<form method="POST" action="/artists/create">
		{{ csrf_field() }}
	  <div class="form-group">
	    <label for="song">Song Name</label>
	    <input type="text" class="form-control" name="song" id="song" placeholder="Song Name">
	  </div>
	  <div class="form-group">
	    <label for="year">Length</label>
	    <input type="text" class="form-control" name="length" id="length" placeholder="Length">
	  </div>
	  <div class="form-group">
	    <label for="album">Album</label>
	  	<select class="custom-select">
		  <option selected>Choose an album</option>
		  @foreach($album as $key => $val)
		  <option value="{{$val->id}}">{{$val->album_name}}</option>
		  @endforeach
		</select>
	  </div>
	  <div class="form-group">
	    <label for="artist">Year</label>

	  	<select class="custom-select">

		  <option value="0" selected>Choose an artist</option>

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
	{{-- @foreach($artist as $key => $val) --}}
		<div class="cardListItem"> 
		<div class="card style="width: 18rem;">
		  <img class="card-img-top" src="{{asset('img/mic.jpg')}}" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">Header</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <div style="display:flex;">
		    <a href="/albums/edit/" class="btn btn-outline-primary">Edit</a>
		    <form method="POST" action="/albums/delete/">
		    	{{ csrf_field() }}
				{{ method_field("DELETE") }}
		    	<button type="submit" class="btn btn-outline-primary">Delete</button>	
		    </form>
		    </div>
		  </div>
		</div>
		</div>
	{{-- @endforeach --}}
</div>
@endsection
