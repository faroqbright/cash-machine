@extends('layouts.app')


<div class="card w-50 mx-auto mt-5">
    <div class="card-header">
        <h4> Cash Sourse </h4>
    </div>
    <div class="card-body">
        <form action="{{ route('cashstore') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="note1">Enter quantity of note 1</label>
                <input type="number" name="note1" class="form-control" id="note1" placeholder="Enter quantity">
            </div>
            @error('note1')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <div class="form-group">
                <label for="note5">Enter quantity of note 5</label>
                <input type="number" name="note5" class="form-control" id="note5" placeholder="Enter quantity">
            </div>
            @error('note5')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <div class="form-group">
                <label for="note10">Enter quantity of note 10</label>
                <input type="number" name="note10" class="form-control" id="note10" placeholder="Enter quantity">
            </div>
            @error('note10')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <div class="form-group">
                <label for="note50">Enter quantity of note 50</label>
                <input type="number" name="note50" class="form-control" id="note50" placeholder="Enter quantity">
            </div>
            @error('note50')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <div class="form-group">
                <label for="note100">Enter quantity of note 100</label>
                <input type="number" name="note100" class="form-control" id="note100" placeholder="Enter quantity">
            </div>
            @error('note100')
                <p class="text-danger">{{ $message }}</p>
            @enderror

            <button type="submit" class="btn btn-outline-primary mt-4">Submit</button>
            <a href="{{ url('/') }}" class="btn btn-outline-info mt-4">Back to Home</a>
        </form>
    </div>
</div>
