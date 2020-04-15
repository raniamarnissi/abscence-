<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Affect extends Model
{

    public function teachers()
    {
       $this->belongsTo('App\Teacher');
    }
    
    public function moduls()
    {
       $this->belongsTo('App\Modul');
    }
    //
}
