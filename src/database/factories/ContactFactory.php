<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'last_name' => $this->faker->lastName,
            'first_name' => $this->faker->firstName,
            'gender' => $this->faker->randomElement([1, 2, 3]),
            'email' => $this->faker->unique()->safeEmail,
            'phone1' => $this->faker->numberBetween(100, 999),
            'phone2' => $this->faker->numberBetween(1000, 9999),
            'phone3' => $this->faker->numberBetween(1000, 9999),
            'address' => $this->faker->address,
            'building' => $this->faker->optional()->secondaryAddress,
            'inquiry_type' => $this->faker->randomElement(['delivery', 'exchange', 'trouble', 'shop', 'other']),
            'content' => $this->faker->text(120),
        ];
    }
}
