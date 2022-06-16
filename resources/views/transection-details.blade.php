@extends('layouts.app')

<div class="card w-50 mx-auto mt-5">
    <div class="card-header">
        <h4> Transection details </h4>
    </div>
    <div class="card-body">

        @if (session('cash'))
            <div>
                <p><strong>ID of Transection: </strong>{{ $transection->id }}</p>
                <p><strong>Qty of note 1: </strong>{{ $transection->cash['note1'] }}</p>
                <p><strong>Qty of note 5: </strong>{{ $transection->cash['note5'] }}</p>
                <p><strong>Qty of note 10: </strong>{{ $transection->cash['note10'] }}</p>
                <p><strong>Qty of note 50: </strong>{{ $transection->cash['note50'] }}</p>
                <p><strong>Qty of note 100: </strong>{{ $transection->cash['note100'] }}</p>
                <p><strong>Total: </strong>{{ $transection->cash['total'] }}</p>
            </div>
        @endif

        @if (session('credit'))
            <div>
                <p><strong>ID of Transection: </strong>{{ $transection->id }}</p>
                <p><strong>Card_number: </strong>{{ $transection->credit['card_number'] }}</p>
                <p><strong>Exp_date: </strong>{{ $transection->credit['exp_date'] }}</p>
                <p><strong>Card holder: </strong>{{ $transection->credit['name'] }}</p>
                <p><strong>CVV: </strong>{{ $transection->credit['cvv'] }}</p>
                <p><strong>Amount: </strong>{{ $transection->credit['amount'] }}</p>
            </div>
        @endif

        @if (session('bank'))
            <div>
                <p><strong>ID of Transection: </strong>{{ $transection->id }}</p>
                <p><strong>Account_number: </strong>{{ $transection->bank['account_number'] }}</p>
                <p><strong>Transfer_date: </strong>{{ $transection->bank['transfer_date'] }}</p>
                <p><strong>Customer name: </strong>{{ $transection->bank['name'] }}</p>
                <p><strong>Amount: </strong>{{ $transection->bank['amount'] }}</p>
            </div>
        @endif

    </div>
</div>
