<?php

namespace App\Traits;

use App\Models\User;
use App\Models\Team;
use InvalidArgumentException;

trait CanJoinTeams
{
    public function hasTeams()
    {
        return count($this->teams) > 0;
    }

    public function teams()
    {
        return $this->belongsToMany(
            Team::class,
            'team_users',
            'user_id',
            'team_id'
        );//->withPivot(['role'])->orderBy('name', 'asc');
    }

    // public function invitations()
    // {
    //     return $this->hasMany(Invitation::class);
    // }

    public function onTeam($team)
    {
        return $this->teams->contains($team);
    }

    public function ownsTeam($team)
    {
        return $this->id && $team->owner_id && $this->id === $team->owner_id;
    }

    public function ownedTeams()
    {
        return $this->hasMany(Spark::teamModel(), 'owner_id');
    }

    // public function roleOn($team)
    // {
    //     if ($team = $this->teams->find($team->id)) {
    //         return $team->pivot->role;
    //     }
    // }

    // public function roleOnCurrentTeam()
    // {
    //     return $this->roleOn($this->currentTeam);
    // }

    public function getCurrentTeamAttribute()
    {
        return $this->currentTeam();
    }

    public function currentTeam()
    {
        if (is_null($this->current_team_id) && $this->hasTeams()) {
            $this->switchToTeam($this->teams->first());

            return $this->currentTeam();
        } elseif (! is_null($this->current_team_id)) {
            $currentTeam = $this->teams->find($this->current_team_id);

            return $currentTeam ?: $this->refreshCurrentTeam();
        }
    }

    // public function currentTeamOnTrial()
    // {
    //     return $this->currentTeam() && $this->currentTeam()->onTrial();
    // }

    public function ownsCurrentTeam()
    {
        return $this->currentTeam() && $this->currentTeam()->owner_id === $this->id;
    }

    public function switchToTeam($team)
    {
        if (! $this->onTeam($team)) {
            throw new InvalidArgumentException('User is not part of this team');
        }

        $this->current_team_id = $team->id;

        $this->save();
    }

    public function refreshCurrentTeam()
    {
        $this->current_team_id = null;

        $this->save();

        return $this->currentTeam();
    }

    /**
     * Get the total number of potential collaborators across all teams.
     *
     * This does not include the current user instance.
     *
     * @return int
     */
    // public function totalPotentialCollaborators()
    // {
    //     return $this->ownedTeams->sum(function ($team) {
    //         return $team->totalPotentialUsers();
    //     }) - $this->ownedTeams->count();
    // }
}
