<?php

namespace App\Http\Controllers;

use App\Models\Transaction; // Sesuaikan dengan nama model yang digunakan
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $regularTransactions = Transaction::where('type', 'regular')->paginate(5);
        $membershipTransactions = Transaction::where('type', 'membership')->paginate(5);
        $eventTransactions = Transaction::where('type', 'event')->paginate(5);

        return view('transaksi', compact('regularTransactions', 'membershipTransactions', 'eventTransactions'));
    }

    public function edit($id)
    {
        $transaction = Transaction::findOrFail($id);
        return view('transaksi.edit', compact('transaction'));
    }

    public function show($id)
    {
        $transaction = Transaction::findOrFail($id);
        return view('transaksi.show', compact('transaction'));
    }

    public function destroy($id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->delete();

        return redirect()->route('transaksi.index')->with('success', 'Transaksi deleted successfully');
    }
}
