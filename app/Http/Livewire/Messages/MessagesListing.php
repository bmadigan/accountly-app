<?php

namespace App\Http\Livewire\Messages;

use Livewire\Component;

class MessagesListing extends Component
{
    public $messages;

    public function mount($messages)
    {
        $this->messages = $messages;
    }

    public function render()
    {
        return view('livewire.messages.messages-listing');
    }
}
