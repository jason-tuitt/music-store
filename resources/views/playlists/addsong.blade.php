@extends('template')

@section('h1', 'Songs to add to playlist')


@section('table-content')
<h3>Playlist Name: {{ $playlist->playlist_name }}</h3>
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

		    <form method="POST" action="/playlists/addsong/{{$playlist->id}}/{{$val->id}}">
		    	{{ csrf_field() }}
		    	<button type="submit" class="btn btn-outline-primary">Add/Delete to Playlist</button>	
		    </form>

		    {{-- <form method="POST" action="/songs/delete/{{$val->id}}">
		    	{{ csrf_field() }}
				{{ method_field("DELETE") }}
		    	<button type="submit" class="btn btn-outline-primary">Delete</button>	
		    </form> --}}
		    </div>
		  </div>
		</div>
		</div>
	@endforeach
</div>
@endsection
