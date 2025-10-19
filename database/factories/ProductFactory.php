<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->randomElement([
            'Vanilla Classic',
            'Chocolate Fudge',
            'Strawberry Delight',
            'Cookies & Cream',
            'Mint Chocolate Chip',
            'Salted Caramel',
            'Matcha Green Tea',
            'Mango Sorbet',
            'Coffee Almond',
            'Blueberry Cheesecake',
            'Rocky Road',
            'Pistachio Dream',
            'Coconut Paradise',
            'Red Velvet',
            'Tiramisu'
        ]);

        $category = fake()->randomElement(['classic', 'premium', 'sorbet', 'vegan']);
        $price = fake()->numberBetween(25000, 85000);
        $hasDiscount = fake()->boolean(30);

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => fake()->paragraph(3),
            'category' => $category,
            'price' => $price,
            'old_price' => $hasDiscount ? $price + fake()->numberBetween(5000, 20000) : null,
            'image' => null,
            'flavors' => fake()->randomElements(
                ['Sweet', 'Creamy', 'Rich', 'Fresh', 'Smooth', 'Natural'],
                fake()->numberBetween(2, 4)
            ),
            'size' => fake()->randomElement(['500ml', '1L', '250ml']),
            'is_featured' => fake()->boolean(20),
            'is_available' => fake()->boolean(90),
            'stock' => fake()->numberBetween(0, 100),
            'badge' => fake()->randomElement([null, 'New', 'Hot', 'Sale']),
        ];
    }

    /**
     * Indicate that the product is featured.
     */
    public function featured(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_featured' => true,
        ]);
    }

    /**
     * Indicate that the product has a discount.
     */
    public function onSale(): static
    {
        return $this->state(function (array $attributes) {
            $price = $attributes['price'];
            return [
                'old_price' => $price + fake()->numberBetween(5000, 20000),
                'badge' => 'Sale',
            ];
        });
    }
}
