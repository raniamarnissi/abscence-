<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'address', 'phone','role'
    ];

    protected $guarded = [];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function moduls()
    {
        return $this->belongsToMany('App\Modul');
    }

    
    public function classes()
    {
        return $this->belongsToMany('App\Classe');
    }



    
    public function seance()
    {
        return $this->hasMany('App\Seance');
    }

    
    public function absences()
    {
        return $this->hasMany('App\Absense');
    }


}
