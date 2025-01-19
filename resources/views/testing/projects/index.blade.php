@extends('layouts.app')

@section('content')
<div class="container">
    <h1>All Projects</h1>
    <ul>
        @foreach ($projects as $project)
            <li>
                <a href="{{ route('projects.show', $project->id) }}">{{ $project->title }}</a>
                <p>Category ID: {{ $project->category_id }}</p>
                <p>Budget: ${{ $project->budget}}</p>
            </li>
        @endforeach
    </ul>
</div>
@endsection
