<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Encrypted;

class Decrypted extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['decrypted_text'];

    public function encrypteds()
    {
        return $this->hasMany(Encrypted::class);
    }
}
