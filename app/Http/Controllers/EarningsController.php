<?php

namespace App\Http\Controllers;

use App\Models\Earnings;
use Illuminate\Http\Request;

class EarningsController extends Controller
{
    // Show the earnings history for the logged-in freelancer
    public function history()
    {
        $user = auth()->user();
        $earnings = Earnings::where('freelancer_id', $user->id)->get();

        return view('earnings.history', compact('earnings'));
    }
}
