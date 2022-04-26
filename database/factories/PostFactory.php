<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //factory post
            'title' => $this->faker->sentence(mt_rand(2, 8)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            'body' => '<p class="mb-3 text-justify">' . implode('</p><p class="mb-3 text-justify">', $this->faker->paragraphs(mt_rand(5, 10))) . '</p>',
            'user_id' => mt_rand(1, 4),
            'category_id' => mt_rand(1, 3)
        ];
    }
}
