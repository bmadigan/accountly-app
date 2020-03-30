<?php

namespace App\Http\Livewire\Messages;

use App\Models\Comment;
use Livewire\Component;

class CommentForm extends Component
{
    public $body;
    public $message;

    public function mount($message)
    {
        $this->message = $message;
    }

    public function submit()
    {
        $this->validate([
            'body' => 'required|min:3',
        ]);

        Comment::create([
            'body' => $this->body,
            'message_id' => $this->message->id,
            'owner_id' => auth()->user()->id,
        ]);

        session()->flash('success', 'Your comment was succesfully created.');

        return redirect()->to(route('messages.show', $this->message->uuid));
    }

    public function render()
    {
        return view('livewire.messages.comment-form');
    }
}
