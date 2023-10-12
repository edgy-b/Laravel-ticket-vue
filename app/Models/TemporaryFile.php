<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemporaryFile extends Model
{
    use HasFactory;

    protected $fillable = ['folder', 'file', 'user_id'];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
