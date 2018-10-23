@extends('template')

@section('h1', 'Playlist')

@section('form')
	<form method="POST" action="/playlists/create">
		{{ csrf_field() }}
	  <div class="form-group">
	    <label for="exampleInputEmail1">Playlist Name</label>
	    <input type="text" class="form-control" name="playlistname" id="playlistName" placeholder="Playlist Name">
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
@endsection

@section('table-content')
	<div class="cardList"> 


	@foreach($playlist as $key => $play)
	
		<div class="cardListItem"> 
		<div class="card style="width: 18rem;">
		  <img class="card-img-top" src="{{asset('img/mic.jpg')}}" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">{{$play->playlist_name}}</h5>
		    	@if( count($play->songs) > 0 )
		    		<ul>
			    	@foreach($play->songs as $s)
			    		<li>{{$s->song_name}}</li>
			    	@endforeach
			    	</ul>
		    	@else
		    		<p style="text-align: center">No Songs found</p>
		    	@endif
{{-- 		    @foreach($artist as $art)
		    	@if($art->id == $val->artist_id)
		    		Artist: {{$art->name}} 
		    	@endif
		    @endforeach --}}
		    {{-- <p>{{ $play->playlist_name }}</p> --}}
{{-- 		    @foreach($album as  $alb)
		    	@if($alb->id == $val->album_id)
		    		<p>Album: {{$alb->album_name}} </p>
		    	@endif
		    @endforeach --}}
		    <div style="display:flex;">
		    <a href="/playlists/addsong/{{$play->id}}" class="btn btn-outline-primary">Add/Delete Songs</a>
		    {{-- <form method="POST" action="/playlists/delete/{{$play->id}}">
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