<?php

namespace App\Http\Livewire\Messages;

use App\Models\Comment;
use Livewire\Component;

class CommentForm extends Component
{
    public $body;
    public $messageId;

    public function mount($mid)
    {
        $this->messageId = $mid;
    }

    public function submit()
    {
        $this->validate([
            'body' => 'required|min:3',
        ]);

        Comment::create([
            'body' => $this->body,
            'message_id' => $this->messageId,
            'owner_id' => auth()->user()->id,
        ]);
    }

    public function render()
    {
        return view('livewire.messages.comment-form');
    }
}
