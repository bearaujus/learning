<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    public $timestamps = false;

    protected $fillable = [
        'name',
        'username',
        'password',
        'lang'
    ];

    protected $hidden = [
        'password'
    ];

    public function getUserInfo()
    {
        return strtoupper($this->name . ' - ' . $this->lang);
    }
}
