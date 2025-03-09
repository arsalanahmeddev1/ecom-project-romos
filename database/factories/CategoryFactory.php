<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    protected $model = Category::class;
    public function definition()
    {
        $this->faker->addProvider(new \App\Faker\ProductProvider($this->faker));
        $name = $this->faker->categoryName();
        return [
            'name' => $name,
            'slug' => Str::slug($name) . '-' . Str::random(5),
        ];
    }
}
