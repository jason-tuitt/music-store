<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Artist;

class ArtistController extends Controller
{
	function views() {
		$artist = Artist::all();
    	return view('artists.artists', compact('artist'));
    }

    function edit($id) {
		$artist = Artist::find($id);
    	return view('artists.editartists', compact('artist'));
    }

    function create(Request $request) {
    	$artist = new Artist;
    	$artist->name = $request->artistname;
    	$artist->save();
    	return redirect('/artists');
    }

    function update(Request $request) {
    	$artist = Artist::find($request->id);
    	$artist->name = $request->newartist;
    	$artist->save();
    	return redirect('/artists');
    }

    function delete($id) {
    	$artist = Artist::find($id);
    	$artist->delete();
    	return redirect('/artists');
    }

}
