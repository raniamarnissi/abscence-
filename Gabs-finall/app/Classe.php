<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{

    protected $fillable = [
        'class_name'
    ];

   public function users()
   {
       return $this->belongsToMany('App\User');
   }

  

    //
}
