<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transection extends Model
{
    use HasFactory;

    protected $filable = [
        "bank",
    ];
    protected $casts = [
        'cash' => 'array',
        'credit' => 'array',
        'bank' => 'array',
    ];
}
