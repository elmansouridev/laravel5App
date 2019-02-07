<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    public function user(){
    	return $this->belongsTo('App\User');
    }
    /*
    public function inscriptions(){
        //return $this->hasMany('App\Inscription');
        return User::where('id',$this->user_id)->first()->name;
    }*/

    public function questionaire(){
    	return $this->hasMany('App\Questionaire');
    }
}
