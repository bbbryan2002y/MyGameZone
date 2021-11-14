<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image'  => 'products/' . $this->faker->image('public/strage/procduct', 640, 480, null, false)
            
        ];
    }
}
