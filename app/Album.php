<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    function artist() {
		return $this->belongsTo('App\Artist');
	}
}
