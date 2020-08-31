<?php

namespace App\Actions;

use App\Models\Team;

class SwitchToTeamAction {

    public function execute($teamId)
    {
        return auth()->user()->switchToTeam($teamId);
    }
}
