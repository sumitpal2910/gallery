<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ItemGalleryFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //$img = 
        return [
            'path',
            'path_type',
            'type',
            'cover_image',
            'name',
            'description',
            'ordering',
            'status',
        ];
    }
}
