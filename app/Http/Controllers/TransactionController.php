<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        return view('index', [
            'transactions' => Transaction::all()
        ]);
    }

    public function create()
    {
        return view('createTransaction');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        Transaction::create($data);

        return redirect('/');
    }
}
