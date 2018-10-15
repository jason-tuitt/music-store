<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbumController extends Controller
{
    function views() {
    	return view('albums.albums');
    }
}
