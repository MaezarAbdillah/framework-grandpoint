<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use  \App\Models\Pengguna;
use  \App\Models\Order;
use  \App\Models\Lapangan;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * protected $fillable = ['jam','hari','durasi','id_lap','id_pengguna'];
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'jam' => fake()->numberBetween(10,23),
            'hari' => fake()->randomElement(['Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu']),
            'durasi' => fake()->numberBetween(1,3),
            'lapangan_id' => Lapangan::all()->random()->id,
            'pengguna_id' => Pengguna::all()->random()->id,
        ];
    }
}
