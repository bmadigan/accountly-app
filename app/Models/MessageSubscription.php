<?php

namespace App\Models;

class MessageSubscription extends Model
{
    protected $table = 'message_subscriptions';

    protected $with = ['user', 'message'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function message()
    {
        return $this->belongsTo(Message::class, 'message_id');
    }
}
