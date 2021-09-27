<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Decrypted;

class Encrypted extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['decrypted_id', 'encrypted_text', 'algo'];

    public function decrypted()
    {
        return $this->belongsTo(Decrypted::class);
    }
}
