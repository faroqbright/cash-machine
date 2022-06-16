@extends('layouts.app')

<div class="card w-50 mx-auto mt-5">
    <div class="card-header">
        <h4>Cash Machine</h4>
    </div>
    <div class="card-body">
        <h5 class="card-title">Choose one of the Following source</h5>
        <div class="mt-5">
            <a href="{{ route('cashindex') }}" class="btn btn-outline-primary">Cash</a>
            <a href="{{ route('creditindex') }}" class="btn btn-outline-info">Credit card</a>
            <a href="{{ route('bankindex') }}" class="btn btn-outline-secondary">Bank Transfer</a>
        </div>
    </div>
</div>

<body>
