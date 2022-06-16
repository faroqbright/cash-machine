<?php

namespace App\Http\Controllers;

use App\Interfaces\Transection;
use App\Models\Transection as ModelsTransection;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CreditCardSourceController extends Controller implements Transection
{

    public function validates($request)
    {

        $request->validate([
            'card_number' => ['required', 'numeric', 'digits:16'],
            'exp_date' => ['required'],
            'name' => ['required'],
            'cvv' => ['required', 'digits:3'],
            'amount' => ['required'],
        ]);
    }


    public function amount($request)
    {
        return  $amount = $request->amount;
    }
    public function inputs($request, $amount)
    {
        $arr['card_number'] = $request->card_number;
        $arr['exp_date'] = $request->exp_date;
        $arr['name'] = $request->name;
        $arr['cvv'] = $request->cvv;
        $arr['amount'] = $amount;
        return $arr;
    }

    function index()
    {
        return view('creditcardform');
    }

    function store(Request $request)
    {
        $date = date('Y-m-d', strtotime($request->exp_date));
        if (Carbon::now()->addDays(60) > $date) {
            return back()->with('error', 'Can\'t use this card');
        }


        $this->validates($request);
        $amount = $this->amount($request);
        $arr = $this->inputs($request, $amount);

        $transection = new ModelsTransection();
        $transection->credit = $arr;
        $transection->save();
        Session::flash('credit', 'credit');
        return view('transection-details', compact('transection'));
    }
}
