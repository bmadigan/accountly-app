<?php

namespace App\Http\Livewire\Messages;

use App\Models\Message;

use Livewire\Component;

class Create extends Component
{
    public $title;
    public $body;

    public function render()
    {
        return view('livewire.messages.create');
    }

    public function submit()
    {
        $this->validate([
            'title' => 'required|min:6',
            'body' => 'required',
        ]);

        Message::create([
            'created_by' => auth()->user()->id,
            'team_id' => auth()->user()->currentTeam()->id,
            'title' => $this->title,
            'body' => $this->body,
        ]);

        return redirect()->route('messages.index');
    }
}