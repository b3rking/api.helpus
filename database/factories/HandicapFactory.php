<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HandicapFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fullname' => $this->faker->name,
            'adress' => $this->faker->address,
            'mobile_number' => $this->faker->phoneNumber,
            'year_of_birth' => $this->faker->year,
            'ecocash_number' => $this->faker->numberBetween(110022211, 110022211),
            'lumicash_number' => $this->faker->numberBetween(110022211, 110022211),
            'bank_name' => $this->faker->streetName,
            'bank_account_number' => $this->faker->numberBetween(5000000, 7000000),
            'story' => $this->faker->text(200),
            'needed_money' => $this->faker->numberBetween(100000, 5000000),
            'state_of_health' => 'bad',
            'main_image' => $this->faker->imageUrl,
            'first_primary_image' => $this->faker->imageUrl,
            'second_primary_image' => $this->faker->imageUrl,
            'donation_status' => "en cours",
            'user_id' => $this->faker->numberBetween(1, 10),
            'family_situation' => "orphelins"
        ];
    }
}
