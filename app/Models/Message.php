<?php

namespace App\Models;

use Dyrynda\Database\Support\GeneratesUuid;

class Message extends Model
{
    use GeneratesUuid;

    protected $with = ['owner', 'category'];

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($message) {
            $message->comments->each->delete();
        });
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function category()
    {
        return $this->belongsTo(MessageCategory::class, 'category_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // public function addReply($reply)
    // {
    //     $reply = $this->replies()->create($reply);

    //     event(new ThreadReceivedNewReply($reply));

    //     return $reply;
    // }
}
