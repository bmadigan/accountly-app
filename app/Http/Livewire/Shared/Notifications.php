<?php

namespace App\Http\Livewire\Shared;

use Livewire\Component;

class Notifications extends Component
{
    public $notifications;

    public function mount()
    {
        $this->notifications = auth()->user()->unreadNotifications->take(5);
    }

    public function markAllAsRead()
    {
        return redirect()->route('notifications.allread');
    }

    public function render()
    {
        return view('livewire.shared.notifications');
    }
}
