<?php

namespace App\Http\Livewire\Messages;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.messages.index', [
            'messages' => auth()->user()->currentTeam->messages
        ]);
    }
}
