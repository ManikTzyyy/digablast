<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Package>
 */
class PackageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=> $this->faker->name,
            'description'=> $this->faker->sentence,
            'price' => $this->faker->numberBetween(0,1_000_000),
            'benefits' => json_encode($this->faker->sentences(rand(2, 5))),
            'is_active' => $this->faker->boolean,
            'duration_days' => $this->faker->numberBetween(1, 30),
            'user_acquisition_limit' => $this->faker->numberBetween(1,5),
            'is_best_offer' => $this->faker->boolean
        ];
    }
}
