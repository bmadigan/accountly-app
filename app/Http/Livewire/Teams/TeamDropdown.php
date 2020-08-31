<?php

namespace App\Http\Livewire\Teams;

use App\Models\Team;
use Livewire\Component;
use App\Actions\SwitchToTeamAction;

class TeamDropdown extends Component
{
    public $teams;

    public function mount()
    {
        $this->teams = auth()->user()->teams;
    }

    public function switchTeam($teamId)
    {
        session()->flash('success', 'Switched to new team');

        (new SwitchToTeamAction())->execute($teamId);

        return redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.teams.team-dropdown');
    }
}
