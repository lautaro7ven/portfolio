<?php

namespace Database\Factories;

use App\Models\FeaturedProyects;
use Illuminate\Database\Eloquent\Factories\Factory;

class FeaturedProyectsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FeaturedProyects::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'description' => $this->faker->text,
            'title' => $this->faker->title,
            'detail' => $this->faker->text,
            'user_id' => rand(1,6)
        ];
    }
}
