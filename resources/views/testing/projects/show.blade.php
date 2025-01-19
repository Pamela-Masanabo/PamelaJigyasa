
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $project->title }}</h1>
    <p>Category ID: {{ $project->category_id }}</p>
    <p>Subcategory ID: {{ $project->subcategory_id }}</p>
    <p>Description: {{ $project->description }}</p>
    <p>Budget: ${{ $project->budget }}</p>
</div>

@endsection
