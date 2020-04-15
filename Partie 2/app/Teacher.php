<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public function classes()
    {
       $this->belongsTo('App\Classe');
    }

    //modul affect
    
    public function moduls()
    {
     $this->belongsTo('App\Modul');
    }


    public function seances()
    {
     $this->hasMany('App\Seance');
    }


    public function affects()
    {
     $this->hasMany('App\Affect');
    }



   
    //
    //
}
