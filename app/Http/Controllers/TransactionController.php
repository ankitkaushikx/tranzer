<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    $transactions = Transaction::where('user_id', Auth::id())
    ->orderBy('created_at', 'desc') // Order by created_at in descending order
    ->paginate(10);


        //now return the view
        return view('transactions.index', ['transactions' => $transactions]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return redirect()->route('dashboard');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTransactionRequest $request)
    {
        $fields = $request->validate([
            'amount' => ['required', 'numeric'],
            'detail' => ['nullable', 'max:230', 'string'],
            'type' => 'required|in:buy,sell',
        ]);

        // Remove negative sign if present
        $amount = abs($fields['amount']);

        // If type is buy, make the amount negative
        if ($fields['type'] === 'buy') {
            $amount = -$amount;
        }

        // Create New Transaction
        $transaction = Auth::user()->transactions()->create([
            'amount' => $amount,
            'detail' => $fields['detail'] ?? '',
            'type' => $fields['type'],
        ]);

        return back()->with('success', "New Transaction Added");
    }


    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransactionRequest $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}

