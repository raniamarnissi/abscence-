<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{

    public function teacher()
    {
       $this->belongsTo('App\Teacher');
    }

 
    public function absenses()
    {
       $this->hasMany('App\Absense');
    }

    //
}
