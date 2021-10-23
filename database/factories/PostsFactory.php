<?php

namespace Database\Factories;

use App\Models\Posts;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Posts::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'post_title' => $this->faker->name,
            'post_on' => $this->faker->date,
            'post_by' => $this->faker->name,
            'post_description' => $this->faker->text,
            'user_id' => rand(1,6)
        ];
    }
}
