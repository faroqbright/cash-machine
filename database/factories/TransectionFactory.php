<?php

namespace Database\Factories;

use App\Models\Transection;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransectionFactory extends Factory
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
            'bank' => [
                "account_number" => random_int(100000, 999999),
                "transfer_date" => Carbon::now(),
                "name" => $this->faker->name,
                "amount" => random_int(1, 999999),
            ]

        ];
    }
}
