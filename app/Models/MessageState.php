<?php

namespace App\Models;

class MessageState extends Model
{
    public $timestamps = false;

    public function message()
    {
        return $this->belongsTo(Message::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
