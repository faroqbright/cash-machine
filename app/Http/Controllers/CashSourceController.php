<?php

namespace App\Http\Controllers;

use App\Interfaces\Transection;
use App\Models\Transection as ModelsTransection;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CashSourceController extends Controller implements Transection
{
    public function validates($request)
    {

        $request->validate([
            'note1' => ['required', 'numeric'],
            'note5' => ['required', 'numeric'],
            'note10' => ['required', 'numeric'],
            'note50' => ['required', 'numeric'],
            'note100' => ['required', 'numeric'],
        ]);
    }


    public function amount($request)
    {
        $note1 = $request->note1;
        $note5 = $request->note5;
        $note10 = $request->note10;
        $note50 = $request->note50;
        $note100 = $request->note100;



        return  $total = $note1 * 1 + $note5 * 5 + $note10 * 10 + $note50 * 50 + $note100 * 100;
    }

    public function inputs($request, $total)
    {
        $arr['note1'] = $request->note1;
        $arr['note5'] = $request->note5;
        $arr['note10'] = $request->note10;
        $arr['note50'] = $request->note50;
        $arr['note100'] = $request->note100;
        $arr['total'] = $total;
        return $arr;
    }


    function index()
    {
        return view('cashform');
    }


    function store(Request $request)
    {
        $this->validates($request);
        $total =   $this->amount($request);
        $arr = $this->inputs($request, $total);

        $transection = new ModelsTransection();
        $transection->cash = $arr;
        $transection->save();
        Session::flash('cash', 'cash');
        return view('transection-details', compact('transection'));
    }
}
