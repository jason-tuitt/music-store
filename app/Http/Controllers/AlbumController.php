<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Artist;
use App\Album;

class AlbumController extends Controller
{
    function views() {
    	$artist = Artist::all();
    	$album = Album::all();
    	return view('albums.albums', compact('artist', 'album'));
    }

    function edit($id) {
   		$artist = Artist::all();
   		$album = Album::find($id);
    	return view('albums.editalbums', compact('artist', 'album'));
    }

    function create(Request $request) {
    	$album = new Album;
    	$album->album_name = $request->album;
    	$album->year = $request->year;
    	$album->genre = $request->genre;
    	$album->artist_id = $request->artist;
    	$album->save();
    	return redirect('/albums');
    }

    function update(Request $request, $id) {
        $album = Album::find($id);
        $album->album_name = $request->album;
        $album->year = $request->year;
        $album->genre = $request->genre;
        $album->artist_id = $request->artist;
        $album->save();
        return redirect('/albums');
    }

    function delete($id) {
        $album = Album::find($id);
        $album->delete();
        return redirect('/albums');
    }

}
