<?php

namespace App\Models;

class Team extends Model
{
    protected $casts = [
        'owner_id' => 'int',
        //'trial_ends_at' => 'datetime',
    ];

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function users()
    {
        return $this->belongsToMany(
            User::class,
            'team_users',
            'team_id',
            'user_id'
        );//->withPivot('role');
    }

    /**
     * Get the total number of users and pending invitations.
     *
     * @return int
     */
    public function totalPotentialUsers()
    {
        return $this->users()->count();// + $this->invitations()->count();
    }

    public function getEmailAttribute()
    {
        return $this->owner->email;
    }

    /**
     * Detach all of the users from the team and delete the team.
     *
     * @return void
     */
    public function detachUsersAndDestroy()
    {
        // if ($this->subscribed()) {
        //     $this->subscription()->cancelNow();
        // }

        $this->users()
            ->where('current_team_id', $this->id)
            ->update(['current_team_id' => null]);

        $this->users()->detach();

        $this->delete();
    }
}
