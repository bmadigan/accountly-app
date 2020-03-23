<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function index()
    {
        return view('messages.index', [
            'messages' => auth()->user()->currentTeam->messages
        ]);
    }

    public function create()
    {
        return view('messages.create');
    }

    public function show(Request $request)
    {
        return view('messages.show', [
            'message' => Message::firstWhere('uuid', $request->uuid)
        ]);
    }
}
