<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Expense>
 */
class ExpenseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $userIds = User::all()->pluck('id');
        $location = fake()->company() . " | " . fake()->address();
        return [
            "location" => $location,
            "cost" => fake()->numberBetween(100,100000),
            "user_id" => fake()->randomElement($userIds)
        ];
    }
}
