<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use  \App\Models\Pengguna;
use  \App\Models\Order;
use  \App\Models\Lapangan;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pengguna>
 */
class PenggunaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->name(),
            'email' => fake()->name(),
            'pass' => fake()->unique()->numberBetween(0,1000)
        ];
    }
}
