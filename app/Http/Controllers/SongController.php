<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SongController extends Controller
{
    function views() {
    	return view('songs.songs');
    }
}
