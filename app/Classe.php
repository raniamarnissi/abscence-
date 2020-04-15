<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{

    public function students()
    {
        $this->hasMany('App\Student');
    }

    public function teachers()
    {
        $this->hasMany('App\Teacher');
    }


    //
}
