<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * Tabela powiązana z modelem
     */
    protected $table = 'admins';

    /**
     * Atrybuty, które można masowo przypisywać
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * Atrybuty ukryte w tablicach / JSON
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Atrybuty z konwersją typów
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
