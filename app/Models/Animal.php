<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\database\Eloquent\Model; //para poder usar modelos

class Animal extends Model
{
    
    protected $table = "animal";
    protected $fillable = [
        'nombre', 'especie', 'genero'
    ];
    public $timestamps = false; //deshabilitamos la creacion de este campo  

 



}
