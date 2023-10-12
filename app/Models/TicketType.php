<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketType extends Model
{
    use HasFactory;

    public $fillable = ['type'];

    public function ticket()
    {
        return $this->hasOne(Ticket::class);
    }
}