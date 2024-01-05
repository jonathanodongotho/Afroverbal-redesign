<?php

namespace Database\Factories;

use App\Models\Signup;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SignUp>
 */
class SignUpFactory extends Factory
{
    protected $model = Signup::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_name' => fake()->unique()->name(),
            'user_email' => fake()->unique()->safeEmail()
        ];
    }
}
