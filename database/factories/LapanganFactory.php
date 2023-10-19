<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use  \App\Models\Pengguna;
use  \App\Models\Order;
use  \App\Models\Lapangan;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lapangan>
 */
class LapanganFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'no_lap' => fake()->numberBetween(1,5),
            'harga' => 150000,
        ];
    }
}
