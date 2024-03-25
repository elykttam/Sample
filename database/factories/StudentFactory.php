<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->firstName(),
            'middle_name' => fake()->optional()->lastName(),
            'last_name' => fake()->lastName(),
            'birthdate' => fake()->dateTimeBetween('-30 years')->format('Y-m-d'),
            'grades' => fake()->numberBetween(70, 100),
            'address_1' => fake()->streetAddress(),
            'zipcode' => fake()->postcode(),
            'city' => fake()->city(),
            'province' => fake()->city(),
        ];
    }
}
