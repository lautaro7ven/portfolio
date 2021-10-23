<?php

namespace Database\Factories;

use App\Models\ProfessionalSkills;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfessionalSkillsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProfessionalSkills::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                'language' => $this->faker->word,
                'percent' => rand(1,99),
                'user_id' => rand(1,6)
        ];
    }
}
