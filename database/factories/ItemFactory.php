<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->sentence();
        return [
            'name' => $name,
            'slug' => slug($name),
            'price'=>$this->faker->numberBetween(100, 1000),
            'description'=>$this->faker->text(),
        ];
    }
}
