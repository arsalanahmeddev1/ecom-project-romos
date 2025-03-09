<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class ProductFactory extends Factory
{

    protected $model = Product::class;
    public function definition()
    {
        $this->faker->addProvider(new \App\Faker\ProductProvider($this->faker));
        $name = $this->faker->productName();
        return [
            'name' => $name,
            'slug' => Str::slug($name) . '-' . Str::random(5),
            'description' => $this->faker->paragraph,
            'price' => $this->faker->randomFloat(2, 10, 500),
            'stock' => $this->faker->randomDigit(),
            'category_id' => Category::factory(),
        ];
    }
}
