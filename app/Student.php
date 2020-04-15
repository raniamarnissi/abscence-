<?php


namespace App;


use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;



use Illuminate\Database\Eloquent\Model;





class Seance extends Model
{
    public function classes()
    {
        $this->belongsTo('App\Classe');
    }

    public function absenses()
    {
        $this->hasMany('App\Absense');
    }

   
    //
}

class Student extends Authenticatable
    {
      
        use Notifiable;

   

      
    
        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = [
            'name', 'email', 'password', 'address', 'phone'
        ];
    
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
    }
    

