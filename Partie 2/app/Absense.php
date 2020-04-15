<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absense extends Model
{

    public function students()
    {
     $this->belongsTo('App\Student');
    }


    
    public function seances()
    {
     $this->belongsTo('App\Seance');
    }


    //
}
