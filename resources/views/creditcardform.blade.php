@extends('layouts.app')

@if (session('error'))
    <div class="alert alert-danger w-50 mx-auto mt-5">{{ session('error') }}</div>
@endif

<div class="card w-50 mx-auto mt-5">
    <div class="card-header">
        <h4> Credit card Sourse </h4>
    </div>
    <div class="card-body">
        <form action="{{ route('creditstore') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="card_number">Card number</label>
                <input type="text" maxlength="16" name="card_number" class="form-control" id="card_number"
                    placeholder="Enter quantity" pattern="4[0-9]+">
            </div>
            @error('card_number')
                <p class="text-danger">{{ $message }}</p>
            @enderror


            <div class="form-group">
                <label for="exp_date">Expiry date</label>
                <input type="date" name="exp_date" class="form-control" id="exp_date" placeholder="Enter quantity">
            </div>
            @error('exp_date')
                <p class="text-danger">{{ $message }}</p>
            @enderror

            <div class="form-group">
                <label for="name">Card holder</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter quantity">
            </div>
            @error('name')
                <p class="text-danger">{{ $message }}</p>
            @enderror

            <div class="form-group">
                <label for="cvv">CVV</label>
                <input type="number" name="cvv" class="form-control" id="cvv" placeholder="Enter quantity">
            </div>
            @error('cvv')
                <p class="text-danger">{{ $message }}</p>
            @enderror

            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="number" name="amount" class="form-control" id="amount" placeholder="Enter quantity">
            </div>
            @error('amount')
                <p class="text-danger">{{ $message }}</p>
            @enderror

            <button type="submit" class="btn btn-outline-primary mt-4">Submit</button>
            <a href="{{ url('/') }}" class="btn btn-outline-info mt-4">Back to Home</a>
        </form>
    </div>
</div>
