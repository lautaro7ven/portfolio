<?php

namespace Database\Factories;

use App\Models\AboutMe;
use Illuminate\Database\Eloquent\Factories\Factory;

class AboutMeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AboutMe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'descripcion' => $this->faker->text,
            'technique'   => $this->faker->title,
            'techniquedescription'   => $this->faker->text,
            'user_id' => rand(1,6)
        ];
    }
}
