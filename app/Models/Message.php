<?php

namespace App\Models;

use Dyrynda\Database\Support\GeneratesUuid;

class Message extends Model
{
    use GeneratesUuid;

    protected $with = ['owner', 'category', 'lastread'];

    protected $dates = ['last_updated'];

    protected static function boot()
    {
        parent::boot();

/*        static::created(function ($message) {
            $message->markAsRead();
        });*/

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

    public function lastread()
    {
        return $this->hasMany(MessageState::class, 'message_id');
    }

    public function subscriptions()
    {
        return $this->hasMany(MessageSubscription::class);
    }

    public function scopeUnread($query)
    {
        $lastRead = auth()->user()->lastRead($this->id);

        if ($lastRead) {
            return $query->where('last_updated', '<=', $lastRead->read_at);
        }

        return;
    }

    public function url()
    {
        return '/';
    }

    public function isOwner()
    {
        return $this->owner->id === auth()->user()->id;
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

    public function markAsRead()
    {
        MessageState::updateOrCreate([
            'message_id' => $this->id,
            'user_id' => auth()->user()->id,
        ], [
            'read_at' => now()
        ]);
    }
}
