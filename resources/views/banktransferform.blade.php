@extends('layouts.app')


@if (session('error'))
    <div class="alert alert-danger w-50 mx-auto mt-5">{{ session('error') }}</div>
@endif

<div class="card w-50 mx-auto mt-5">
    <div class="card-header">
        <h4> Bank Transfer Sourse </h4>
    </div>
    <div class="card-body">
        <form action="{{ route('bankstore') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="account_number">Account number</label>
                <input type="number" maxlength="6" name="account_number" class="form-control" id="account_number"
                    placeholder="Enter quantity">
            </div>
            @error('account_number')
                <p class="text-danger">{{ $message }}</p>
            @enderror


            <div class="form-group">
                <label for="transfer_date">Transfer date</label>
                <input type="date" name="transfer_date" class="form-control" id="transfer_date"
                    placeholder="Enter quantity">
            </div>
            @error('transfer_date')
                <p class="text-danger">{{ $message }}</p>
            @enderror

            <div class="form-group">
                <label for="name">Customer name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter quantity">
            </div>
            @error('name')
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
