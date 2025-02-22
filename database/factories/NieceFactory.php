<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Owner;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Niece>
 */
class NieceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
      return [
        'name' => fake()->name(),
        'type' => fake()->randomElement(['Human', 'Dog']),
        'owner_id' => Owner::factory(),
        'can_talk' => false
      ];
    }

    public function canTalk(): static {
      return $this->state(fn (array $attributes) => [
          'can_talk' => true
      ]);
    }
}