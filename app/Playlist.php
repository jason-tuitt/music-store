<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    function songs(){
    	return $this->belongsToMany('App\Song', 'playlists_songs');
    }
}
