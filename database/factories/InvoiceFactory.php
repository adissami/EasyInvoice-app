<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'number' => $this->faker->numberBetween(10, 1000),
            'ref' => 'REF-' .rand(0, 500),
            'date' => $this->faker->date,
            'due_date' => $this->faker->date,
            'customer_id' => $this->faker->numberBetween(1,20),
            'terms_and_conditions' => $this->faker->paragraph(2),
            'subtotal' => $this->faker->numberBetween(1,20),
            'total' => $this->faker->numberBetween(1,20),
            'discount' => $this->faker->numberBetween(1,20),

        ];
    }
}
