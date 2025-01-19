<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        // Check role and pass relevant data to the view
        if ($user->role == 'customer') {
            return view('customerboard', compact('user'));
        }

        return view('freelancerboard', compact('user'));
    }

}
