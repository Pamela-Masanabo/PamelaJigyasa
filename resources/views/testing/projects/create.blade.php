@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create a New Project</h1>
    <form action="{{ route('projects.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>

        <label for="category_id">Category:</label>
        <input type="number" id="category_id" name="category_id" required>

        <label for="subcategory_id">Subcategory:</label>
        <input type="number" id="subcategory_id" name="subcategory_id" required>
<!-- 
        <label for="budget_min">Minimum Budget:</label>
        <input type="number" id="budget_min" name="budget_min" required> -->

        <label for="budget">Maximum Budget:</label>
        <input type="number" id="budget" name="budget" required>

        <button type="submit">Create Project</button>
    </form>
</div>
@endsection
