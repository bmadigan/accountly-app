<?php

namespace App\Http\Livewire\Messages;

use Livewire\Component;

class Subscriptions extends Component
{
    public $message;

    public function mount($message)
    {
        $this->message = $message;
    }

    public function subscribe()
    {
        $this->message->subscribe(auth()->user()->id);
    }

    public function unsubscribe()
    {
        $this->message->unsubscribe();
    }

    public function render()
    {
        return view('livewire.messages.subscriptions');
    }
}
