<?php

namespace App\Http\Controllers;

use App\Models\SupportTicket;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    // Display the support tickets for the logged-in user
    public function index()
    {
        $user = auth()->user();
        $tickets = SupportTicket::where('user_id', $user->id)->get();

        return view('support.index', compact('tickets'));
    }

    // Store a new support ticket
    public function store(Request $request)
    {
        $request->validate([
            'subject' => 'required|string|max:255',
            'status' => 'required|in:open,closed,pending',
        ]);

        $ticket = new SupportTicket([
            'user_id' => auth()->id(),
            'subject' => $request->subject,
            'status' => $request->status,
        ]);
        $ticket->save();

        return redirect()->route('support.index');
    }

    // Show a specific ticket
    public function show(SupportTicket $ticket)
    {
        return view('support.show', compact('ticket'));
    }

    // Update the status of the ticket
    public function update(Request $request, SupportTicket $ticket)
    {
        $ticket->update(['status' => $request->status]);

        return redirect()->route('support.index');
    }

    // Delete a ticket
    public function destroy(SupportTicket $ticket)
    {
        $ticket->delete();

        return redirect()->route('support.index');
    }
}

