<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function dashboard()
    {
        $user = auth()->user();

        // Fetch projects associated with the customer
        $projects = Project::where('customer_id', $user->id)->get();

        // Return view with the customer data
        return view('customerboard', compact('user', 'projects'));
    }

    // Other customer-specific actions can go here, for example:
    public function messages()
    {
        // Logic for fetching customer messages
    }

    public function support()
    {
        // Logic for customer support
    }

    // Other actions as necessary
}

