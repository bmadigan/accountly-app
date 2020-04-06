<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function index()
    {
        $messages = auth()->user()->currentTeam->messages;

        return view('messages.index', [
            'messages' => $messages
        ]);
    }

    public function create()
    {
        return view('messages.create');
    }

    public function show(Request $request)
    {
        $message = Message::firstWhere('uuid', $request->uuid);
        $message->markAsRead();

        return view('messages.show', ['message' => $message]);
    }
}
