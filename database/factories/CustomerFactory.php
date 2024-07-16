<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_name' => "sohan",
            'contact_name' => "01710562222",
            'address' => "khulna,bangladesh",
            'city' => "khulna",
            'postal_code' => "90000",
            'country' => "bangladesh",
        ];
    }
}
