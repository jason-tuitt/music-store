<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtistController extends Controller
{
    function views() {
    	$b5nc_girls = array('Gladys' => array('age'=>15, 'address'=>'doon'), 'Risty' => array('age'=>16, 'address'=>'diyan'), 'Mary' => array('age'=>17, 'address'=>'dito'));
    	$b5nc_boys = array('Clint', 'Sep', 'Ivan', 'Jason', 'EM', 'Jarome');
    	
    	$class = ['b5nc_boys' => $b5nc_boys, 'b5nc_girls' => $b5nc_girls];

    	return view('artists.artists', compact('b5nc_girls', 'b5nc_boys'));
    }
}
