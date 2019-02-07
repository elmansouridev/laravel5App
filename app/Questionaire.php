<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionaire extends Model
{
    public function inscription(){
    	return $this->belongsTo('App\Inscription');
    }
}
