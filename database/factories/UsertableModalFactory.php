<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UsertableModal>
 */
class UsertableModalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $modal = UsertableModal::class;
    public function definition(): array
    {
        return [
            'address' => $this->faker->address,
            'company' => $this->faker->company,
            'job_title' => $this->faker->jobTitle,
        ];
    }
}
