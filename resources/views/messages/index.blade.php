@extends('layouts.app')

@section('content')
<div class="messages-container">
    <h1>Messages</h1>
    
    @forelse ($messages as $message)
        <div class="message">
            <p><strong>From: </strong>{{ $message->sender->name }}</p>
            <p><strong>Subject: </strong>{{ $message->subject }}</p>
            <p><strong>Message: </strong>{{ $message->content }}</p>
            <hr>
        </div>
    @empty
        <p>No messages found.</p>
    @endforelse
</div>
@endsection
