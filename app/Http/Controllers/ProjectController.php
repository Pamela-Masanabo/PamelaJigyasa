<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // Display all projects for the logged-in user (either customer or freelancer)
    public function index()
    {
        $user = auth()->user();

        if ($user->role == 'customer') {
            // Fetch all projects where the user is the customer
            $projects = $user->projectsAsCustomer;
        } else {
            // Fetch all projects where the user is the freelancer
            $projects = $user->projectsAsFreelancer;
        }

        return view('projects.index', compact('projects'));
    }

    // Show the form to create a new project
    public function create()
    {
        return view('projects.create');
    }

    // Store a new project in the database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|in:' . implode(',', [Project::STATUS_ACTIVE, Project::STATUS_IN_PROGRESS, Project::STATUS_COMPLETED]),
        ]);

        $project = new Project([
            'name' => $request->name,
            'description' => $request->description,
            'status' => $request->status,
            'customer_id' => auth()->id(), // assuming customer is logged in
        ]);
        $project->save();

        return redirect()->route('projects.index');
    }

    // Show a specific project details
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    // Show the form to edit an existing project
    public function edit(Project $project)
    {
        // Ensure the user is authorized to edit the project
        $this->authorize('update', $project);

        return view('projects.edit', compact('project'));
    }

    // Update an existing project
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|in:' . implode(',', [Project::STATUS_ACTIVE, Project::STATUS_IN_PROGRESS, Project::STATUS_COMPLETED]),
        ]);

        $project->update($request->all());

        return redirect()->route('projects.index');
    }

    // Delete a project
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('projects.index');
    }
}
