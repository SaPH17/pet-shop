<?php

namespace App\Http\Controllers;

use App\Cart;
use App\DetailTransaction;
use App\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        if(auth()->user()->email != 'admin@admin.com'){
            $transactions = Transaction::where('user_id', '=', $user_id)->get();
        }
        else{
            $transactions = Transaction::all();
        }

        return view('transaction', compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = auth()->user()->id;
        $carts = Cart::where('user_id', '=', $user_id)->get();

        $transaction = new Transaction();
        $transaction->user_id = $user_id;
        $transaction->save();

        foreach($carts as $cart){
            $detailTransaction = new DetailTransaction();

            $detailTransaction->id = $transaction->id;
            $detailTransaction->pet_id = $cart->pet_id;
            $detailTransaction->quantity = $cart->quantity;
            $detailTransaction->save();
        }

        $carts = Cart::where('user_id', '=', $user_id)->get()->each->delete();

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transactions = DetailTransaction::where('id', '=', $id)->get();
        return view('transactiondetail', compact('transactions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
