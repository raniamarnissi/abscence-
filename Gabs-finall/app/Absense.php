<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absense extends Model
{

 //   public function users()
    //{
  //return   $this->belongsTo('App\User');
 //   }


    
    public function seances()
    {
  return   $this->belongsTo('App\Seance');
    }

 public function moduls()
    {
  return   $this->belongsTo('App\Modul');
    }



    public function users()
    {
        return $this->belongsToMany('App\User');
    }
 
   
    //
}
