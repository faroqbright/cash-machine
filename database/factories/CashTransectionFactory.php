<?php

namespace Database\Factories;

use App\Models\Transection;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class CashTransectionFactory extends Factory
{

    public  $model = Transection::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cash' => [
                "note1" => random_int(1, 999999),
                "note5" => random_int(1, 999999),
                "note10" => random_int(1, 999999),
                "note50" => random_int(1, 999999),
                "note100" => random_int(1, 999999),
                "total" => random_int(1, 999999),
            ]
        ];
    }
}
