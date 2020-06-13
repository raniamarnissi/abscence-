<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modul extends Model
{
    protected $fillable = [
        'modul'
    ];

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
    public function absente()
    {
        return $this->hasMany('App\Modul');
    }


/*
   // relaion affec
   public function affects()
   {
   return $this->hasMany('App\Affect');
   }

    //*/
}
