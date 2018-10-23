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
        $artist->image_path = 'img/uploaded_image/default.jpg';
        $artist->save();

        if($request->hasFile('imageartist')) {
            $extension = $request->imageartist->getClientOriginalExtension();
            $request->imageartist->move('img/uploaded_image/', "$artist->id.$extension");
            $artist->image_path = "img/uploaded_image/$artist->id.$extension";
            $artist->save();
        }
        
    	return redirect('/artists');
    }

    function update(Request $request) {
        
    	$artist = Artist::find($request->id);
    	$artist->name = $request->newartist;
        $rand = rand(1,1000);

        if($request->hasFile('editimageartist')) {
            $extension = $request->editimageartist->getClientOriginalExtension();
            $request->editimageartist->move('img/uploaded_image/', "$artist->id".$rand.".$extension");
            $artist->image_path = "img/uploaded_image/$artist->id".$rand.".$extension";
            $artist->save();
        }
    	$artist->save();
    	return redirect('/artists');
    }

    function delete($id) {
    	$artist = Artist::find($id);
    	$artist->delete();
    	return redirect('/artists');
    }

}
