@extends('layouts.app')

@section('content')
<div class="earnings-history-container">
    <h1>Earnings History</h1>
    
    <table class="table">
        <thead>
            <tr>
                <th>Project Name</th>
                <th>Earnings</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($earningsHistory as $earning)
                <tr>
                    <td>{{ $earning->project->name }}</td>
                    <td>${{ $earning->earnings }}</td>
                    <td>{{ $earning->updated_at->format('M d, Y') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">No earnings history available.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
