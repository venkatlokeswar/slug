<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAuth extends Model
{
        protected $table = 'users';
        protected $primaryKey='email';
          /**
          * The attributes that are mass assignable.
          *
          * @var array
          */   
         protected $fillable = [
             'email', 'password',
         ];

         /**
          * The attributes that should be hidden for arrays.
          *
          * @var array
          */
         protected $hidden = [
             'password', 
         ];
        
}
