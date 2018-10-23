@extends('template')

@section('h1', 'Songs')

@section('form')
	<form method="POST" action="/songs/create">
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
	  	<select class="custom-select" name="album">
		  @foreach($album as $key => $val)
		  <option value="{{$val->id}}">{{$val->album_name}}</option>
		  @endforeach
		</select>
	  </div>
	  {{-- <div class="form-group">
	    <label for="artist">Artist</label>

	  	<select class="custom-select" name="artist">
		  <option value="0" selected>Choose an artist</option>
		  @foreach($artist as $key => $val)
		  <option value="{{$val->id}}">{{$val->name}}</option>
		  @endforeach
		</select>
	  </div> --}}
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
@endsection

@section('table-content')
<div class="cardList"> 
	@foreach($song as $key => $val)
		<div class="cardListItem"> 
		<div class="card style="width: 18rem;">
		  <img class="card-img-top" src="{{asset('img/mic.jpg')}}" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">{{$val->song_name}}</h5>

{{-- 		    @foreach($artist as $art)
		    	@if($art->id == $val->artist_id)
		    		Artist: {{$art->name}} 
		    	@endif
		    @endforeach --}}
		    <p>{{ $val->album->artist->name }}</p>
{{-- 		    @foreach($album as  $alb)
		    	@if($alb->id == $val->album_id)
		    		<p>Album: {{$alb->album_name}} </p>
		    	@endif
		    @endforeach --}}
		    <p>{{ $val->album->album_name }}</p>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <div style="display:flex; justify-content: center">
		    <a href="/songs/edit/{{$val->id}}" class="btn btn-outline-primary">Edit</a>
		    <form method="POST" action="/songs/delete/{{$val->id}}">
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
