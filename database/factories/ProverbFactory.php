<?php

namespace Database\Factories;

use App\Models\Proverb;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proverb>
 */
class ProverbFactory extends Factory
{


    protected $model = Proverb::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $imageText = fake()->unique()->words(3, true);
        $slugText = fake()->unique()->words(6, true);

        return [
            'image_path' => str::slug($imageText, '-'), 
            'slug' => str::slug($slugText, '-'),
            'proverb_text' => fake()->unique()->text(70),
            'proverb_translation' => fake()->unique()->text(80),
            'teaching' => fake()->unique()->text(250),
            'context_id' => fake()->numberBetween(1, 5),
            'tribe_id' => fake()->numberBetween(1, 6),
        ];
    }
}
