<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'contact_email' => $this->faker->unique()->safeEmail(),
            'contact_phone' => '+541128175424',
            'contact_address' => $this->faker->address,
            'contact_city' => $this->faker->name,
            'user_id' => rand(1,6)
        ];
    }
}
