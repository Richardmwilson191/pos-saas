<?php

namespace Database\Factories;

use Faker\Provider\Lorem;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class StoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $companyName = $this->faker->company();
        return [
            'user_id' => $this->faker->numberBetween(0, 5),
            'contact_id' => $this->faker->numberBetween(0, 5),
            'store_type_id' => $this->faker->numberBetween(0, 5),
            'name' => $companyName,
            'title' => $this->faker->companySuffix(5),
            'banner_message' => $this->faker->realText(20),
            'slogan' => $this->faker->realText(20),
            'mission' => $this->faker->realText(10),
            'theme' => "lorem",
            'desc' => $this->faker->realText(22),
            'logo_path' => Str::random(10),
        ];
    }

    
}
