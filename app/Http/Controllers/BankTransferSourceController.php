<?php

namespace App\Http\Controllers;

use App\Interfaces\Transection;
use App\Models\Transection as ModelsTransection;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BankTransferSourceController extends Controller implements Transection
{
    public function validates($request)
    {

        $request->validate([
            'account_number' => ['required', 'numeric', 'digits:6'],
            'transfer_date' => ['required'],
            'name' => ['required'],
            'amount' => ['required', 'numeric'],
        ]);
    }


    public function amount($request)
    {
        return  $amount = $request->amount;
    }
    public function inputs($request, $amount)
    {
        $arr['account_number'] = $request->account_number;
        $arr['transfer_date'] = $request->transfer_date;
        $arr['name'] = $request->name;
        $arr['amount'] = $amount;
        return $arr;
    }

    function index()
    {
        return view('banktransferform');
    }
    function store(Request $request)
    {
        $date = date('Y-m-d', strtotime($request->transfer_date));
        if (Carbon::now() > $date) {
            return back()->with('error', 'Add transfer date from future');
        }

        $this->validates($request);
        $amount = $this->amount($request);
        $arr = $this->inputs($request, $amount);

        if ($amount > 20000) {
            return back()->with('error', 'Max Amount limit is 20k');
        }

        $transection = new ModelsTransection();
        $transection->bank = $arr;
        $transection->save();
        Session::flash('bank', 'bank');
        return view('transection-details', compact('transection'));
    }
}
