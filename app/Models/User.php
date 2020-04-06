<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use App\Traits\CanJoinTeams;
use Rackbeat\UIAvatars\HasAvatar;
use Illuminate\Support\Carbon;
use Illuminate\Notifications\Notifiable;
use Dyrynda\Database\Support\GeneratesUuid;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, CanJoinTeams, GeneratesUuid, HasAvatar;

    protected static function boot()
    {
        parent::boot();

        // Automatically add a default avatar for the User
        // static::creating(function ($user) use ($hex, $avatar) {
        //     //$av = $avatar->name($user->name)

        //     $user->update(['avatar' => $av]);
        // });
    }

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token', 'staff'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getPhotoUrlAttribute()
    {
        return $this->getUrlfriendlyAvatar();
        //return empty($value) ? 'https://www.gravatar.com/avatar/' . md5(Str::lower($this->email)) . '.jpg?s=200&d=mm' : url($value);
    }

    public function isStaff()
    {
        return ($this->staff);
    }

    public function lastRead($messageId)
    {
        return MessageState::where([
            ['message_id', '=', $messageId],
            ['user_id', '=', auth()->user()->id]
        ])->first();
    }
}
