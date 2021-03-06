<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;    

class Admin extends Model
{
    use HasFactory, Notifiable;
   
   protected $fillable = [
       'name',
       'email',
       'password',
   ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $guard = 'admin';


    protected $hidden = ['password'];
}
