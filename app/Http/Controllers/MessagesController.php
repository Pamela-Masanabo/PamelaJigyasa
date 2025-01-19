<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    // Show the list of messages
    public function index()
    {
        $user = auth()->user();
        // Fetch messages where the user is either the sender or the receiver
        $messages = Message::where('sender_id', $user->id)
            ->orWhere('receiver_id', $user->id)
            ->get();

        return view('messages.index', compact('messages'));
    }

    // Store a new message
    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required|string',
            'receiver_id' => 'required|exists:users,id',
        ]);

        $message = new Message([
            'sender_id' => auth()->id(),
            'receiver_id' => $request->receiver_id,
            'message' => $request->message,
        ]);
        $message->save();

        return redirect()->route('messages.index');
    }

    // Show the form to edit a message (if needed)
    public function edit(Message $message)
    {
        return view('messages.edit', compact('message'));
    }

    // Update the message
    public function update(Request $request, Message $message)
    {
        $message->update(['message' => $request->message]);

        return redirect()->route('messages.index');
    }

    // Delete a message
    public function destroy(Message $message)
    {
        $message->delete();

        return redirect()->route('messages.index');
    }
}

