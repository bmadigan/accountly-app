<?php

namespace App\Http\Livewire\Messages;

use Livewire\Component;
use App\Actions\CreateCommentAction;
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

        $comment = $this->createComment(request()->all());

        $this->notifySubscribers($comment);

        session()->flash('success', 'Your comment was succesfully created.');

        return redirect()->to(route('messages.show', $this->message->uuid));
    }

    protected function createComment($request)
    {
        return (new CreateCommentAction())->execute($request['data']);
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

    public function render()
    {
        return view('livewire.messages.comment-form');
    }
}
