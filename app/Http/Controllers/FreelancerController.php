<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class FreelancerController extends Controller
{
    public function freelancerdashboard()
    {
        $user = auth()->user();

        // Fetch projects assigned to the freelancer
        $projects = Project::where('freelancer_id', $user->id)->get();

        // Calculate total earnings (assuming 'earnings' is a numeric column)
        $earnings = $projects->sum('earnings');

        return view('freelancerboard', compact('user', 'projects', 'earnings'));
    }

    public function messages()
    {
        // Logic for fetching freelancer messages
    }

    public function earningsHistory()
    {
        // Logic for freelancer earnings history
    }

    // Other actions as necessary
}
