<?php

namespace Database\Factories;

use App\Models\Contact;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

     protected $model = Contact::class;

    public function definition()
    {

        $categories = Category::all();
        $inquiryType = $categories->isEmpty() ? 'default' : $categories->random()->content;

        return [
            'last_name' => $this->faker->lastName,
            'first_name' => $this->faker->firstName,
            'gender' => $this->faker->randomElement(['男性', '女性', 'その他']),
            'email' => $this->faker->unique()->safeEmail,
            'tel' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'building' => $this->faker->optional()->secondaryAddress,
            'inquiry_type' => $inquiryType,
            'content' => $this->faker->paragraph,
            'category_id' => \App\Models\Category::inRandomOrder()->first()->id,
        ];
    }
}
