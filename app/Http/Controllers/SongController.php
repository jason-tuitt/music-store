<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Artist;
use App\Album;
use App\Song;


class SongController extends Controller
{
    function views() {
    	$artist = Artist::all();
    	$album = Album::all();
    	$song = Song::all();
    	return view('songs.songs', compact('artist', 'album', 'song'));
    }


    function edit($id) {
		$song = Song::find($id);
		$artist = Artist::all();
    	$album = Album::all();
    	return view('songs.editsongs', compact('song', 'album', 'artist'));
    }

    function create(Request $request) {
    	$song = new Song;
    	$song->song_name = $request->song;
    	$song->length = $request->length;
    	$song->artist_id = $request->artist;
    	$song->album_id = $request->album;
    	$song->save();
    	return redirect('/songs');
    }

    function update(Request $request) {
    	$song = Song::find($request->id);
    	$song->song_name = $request->song;
    	$song->length = $request->length;
    	$song->artist_id = $request->artist;
    	$song->album_id = $request->album;
    	$song->save();
    	return redirect('/songs');
    }

    function delete($id) {
    	$song = Song::find($id);
    	$song->delete();
    	return redirect('/songs');
    }
}
