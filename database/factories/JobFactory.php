<?php

namespace Database\Factories;

use App\Enums\EmploymentType;
use Illuminate\Support\Number;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->realText(50),
            'company_name' => fake()->company(),
            'company_logo' => fake()->imageUrl(100,100),
            'employment_type' => fake()->randomElement(EmploymentType::cases())->value,

            'job_role' => fake()->jobTitle(),
            'apply_url' => fake()->url(),
            'salary' => Number::currency(fake()->numberBetween(1000, 100000), 'USD') . ' - ' . Number::currency(fake()->numberBetween(1000, 100000), 'USD'),
            'description' => fake()->realText(600),

        ];
    }
}
