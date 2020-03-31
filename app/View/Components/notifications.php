<?php

namespace App\View\Components;

use Illuminate\View\Component;

class notifications extends Component
{
    public $notifications;

    public function __construct()
    {
        $this->notifications = auth()->user()->unreadNotifications;
    }

    public function render()
    {
        return view('components.notifications');
    }
}
