<?php

namespace App\Http\Livewire\Messages;

use App\Models\Message;

use Livewire\Component;
use App\Actions\CreateMessageAction;

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
        sleep(3); // just testing the little spinner icon

        $this->validate([
            'title' => 'required|min:6',
            'body' => 'required',
        ]);

        $message = $this->createMessage(request()->all());

        // Subscribe the user to the message automatically
        $message->subscribe();

        session()->flash('success', 'Your Message has been created');

        return redirect()->route('messages.show', $message->uuid);
    }

    protected function createMessage($request)
    {
        return (new CreateMessageAction())->execute($request['data']);
    }
}
