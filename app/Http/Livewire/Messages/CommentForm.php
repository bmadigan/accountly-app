<?php

namespace App\Http\Livewire\Messages;

use App\Models\Comment;
use Livewire\Component;
use App\Notifications\NotifySubscribers;

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

        $comment = $this->createComment();

        $this->notifySubscribers($comment);

        session()->flash('success', 'Your comment was succesfully created.');

        return redirect()->to(route('messages.show', $this->message->uuid));
    }

    public function render()
    {
        return view('livewire.messages.comment-form');
    }

    protected function createComment()
    {
        return Comment::create([
            'body' => $this->body,
            'message_id' => $this->message->id,
            'owner_id' => auth()->user()->id,
        ]);
    }

    protected function notifySubscribers($comment)
    {
        // Notify subscribers except for the auth user.
        foreach ($this->message->subscriptions as $sub) {
            if ($sub->user != auth()->user()) {
                $sub->user->notify(new NotifySubscribers($this->message, $comment));
            }
        }
    }
}
