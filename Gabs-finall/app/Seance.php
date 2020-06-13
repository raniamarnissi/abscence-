<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{


   public function users()
    {
      return $this->belongsTo('App\User');
    }


    
 
   // public function absenses()
    //{
    // return  $this->hasMany('App\Absense');
    //}

    //
}
