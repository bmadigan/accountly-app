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

    public function subscriptions()
    {
        return $this->hasMany(MessageSubscription::class);
    }

    public function subscribe($userId = null)
    {
        $this->subscriptions()->create([
            'user_id' => $userId ?: auth()->user()->id,
        ]);
    }

    public function unsubscribe($userId = null)
    {
        $this->subscriptions()
            ->where('user_id', $userId ?: auth()->user()->id)
            ->delete();
    }

    public function getIsSubscribedAttribute()
    {
        return $this->subscriptions()
            ->where('user_id', auth()->id())
            ->exists();
    }
}
