<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Artist;
use App\Album;

class SongController extends Controller
{
    function views() {
    	$artist = Artist::all();
    	$album = Album::all();
    	return view('songs.songs', compact('artist', 'album'));
    }
}
