<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Dyrynda\Database\Support\GeneratesUuid;

class Comment extends Model
{
    use GeneratesUuid;

    protected $with = ['owner'];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($comment) {
            $comment->message->increment('comment_count');
        });

        static::deleted(function ($comment) {
            $comment->message->decrement('comment_count');
        });
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function message()
    {
        return $this->belongsTo(Message::class);
    }

    public function wasJustPublished()
    {
        return $this->created_at->gt(Carbon::now()->subMinute());
    }
}
