<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Traits\CanJoinTeams;
use Illuminate\Support\Carbon;
use Illuminate\Notifications\Notifiable;
use Dyrynda\Database\Support\GeneratesUuid;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, CanJoinTeams, GeneratesUuid;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token', 'staff'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getPhotoUrlAttribute($value)
    {
        return empty($value) ? 'https://www.gravatar.com/avatar/' . md5(Str::lower($this->email)) . '.jpg?s=200&d=mm' : url($value);
    }

    public function isStaff()
    {
        return ($this->staff);
    }

    public function read($message)
    {
        cache()->forever(
            $this->visitedMessageCacheKey($message),
            Carbon::now()
        );
    }

    public function visitedMessageCacheKey($message)
    {
        return sprintf("users.%s.visits.%s", $this->id, $message->id);
    }
}
