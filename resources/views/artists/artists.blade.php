@extends('template')

@section('h1', 'Artists')

@section('form')
	<form method="POST" action="/artists/create">
		{{ csrf_field() }}
	  <div class="form-group">
	    <label for="exampleInputEmail1">Artist Name</label>
	    <input type="text" class="form-control" name="artistname" id="artistName" placeholder="Artist Name">
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
@endsection

@section('table-content')
<div class="cardList"> 
	@foreach($artist as $key => $val)
		<div class="cardListItem"> 
		<div class="card style="width: 18rem;">
		  <img class="card-img-top" src="{{asset('img/mic.jpg')}}" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">{{$val->name}}</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <div style="display:flex;">
		    <a href="/artists/edit/{{$val->id}}" class="btn btn-outline-primary">Edit</a>
		    <form method="POST" action="/artists/delete/{{$val->id}}">
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