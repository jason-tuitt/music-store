<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtistController extends Controller
{
    function views() {
    	$arrays = array('name' => 'hi','name2' => 'helloo'); 
    	return view('artists.artists', compact('arrays'));
    }
}
