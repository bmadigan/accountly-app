<?php

namespace App\Models;

class Message extends Model
{
    public function owner()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
