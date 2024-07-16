<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "customer_id" => Customer::factory(),
            "product_id" => Product::factory(),
            "order_date" => $this->faker->dateTimeThisYear(),
            "price" => rand(0,10000),
            "is_completed"=>rand(0,1),
        ];
    }
}
