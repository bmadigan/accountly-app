<?php

namespace App\Notifications;

use App\Models\User;
use App\Models\Message;
use App\Models\Comment;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NotifySubscribers extends Notification
{
    use Queueable;

    protected $comment;
    protected $message;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Message $message, Comment $comment)
    {
        $this->message = $message;
        $this->comment = $comment;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    public function toDatabase(User $user)
    {
        return [
            'message' => $this->message->title,
            'message_id' => $this->message->uuid,
            'comment_by' => $this->comment->owner->name,
        ];
    }
}
