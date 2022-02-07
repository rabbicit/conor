<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $productname = $this->faker->unique()->words($nb=4, $asText = true);
        $slug = Str::slug($productname);
        return [
            'name' => $productname,
            'slug' => $slug,
            'short_description' => $this->faker()->text(200),
            'description' => $this->faker()->text(500),
            'regular_price' => $this->faker()->numberBetween(100, 500),
            'SKU' => 'PRD'.$this->faker()->unique()->numberBetween(100,500),
            'image' => 'gallery'.$this->faker()->unique()->numberBetween(1,10).'.jpg',
            'category_id' => $this->faker()->numberBetween(1,5),
        ];
    }
}
