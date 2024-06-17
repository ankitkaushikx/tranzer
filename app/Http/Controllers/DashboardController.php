<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon; // Include Carbon for date handling

class DashboardController extends Controller
{
    // Load index
    public function index()
    {
        // Get today's date
        $today = Carbon::today()->toDateString();

        // Fetch transactions for the current authenticated user
        $transactions = Transaction::where('user_id', Auth::id())
            ->whereDate('updated_at', $today) // Filter by today's transactions
            ->orderByDesc('updated_at') // Order by created_at descending
            ->get();

        return view('dashboard', ['transactions' => $transactions]);
    }
}
