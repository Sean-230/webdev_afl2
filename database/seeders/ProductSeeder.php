<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Hapus semua produk sebelumnya untuk menghindari duplikasi
        Product::truncate();

        $products = [
            [
                'name' => 'Vanilla Dream',
                'slug' => 'vanilla-dream',
                'description' => 'Classic Madagascar vanilla ice cream with real vanilla bean specks. Creamy, smooth, and perfectly sweet.',
                'category' => 'classic',
                'price' => 35000,
                'old_price' => null,
                'image' => null,
                'flavors' => ['Sweet', 'Creamy', 'Smooth'],
                'size' => '500ml',
                'is_featured' => true,
                'is_available' => true,
                'stock' => 50,
                'badge' => null,
            ],
            [
                'name' => 'Chocolate Heaven',
                'slug' => 'chocolate-heaven',
                'description' => 'Rich Belgian chocolate ice cream with chocolate chunks. A chocolate lover\'s paradise.',
                'category' => 'classic',
                'price' => 38000,
                'old_price' => 45000,
                'image' => null,
                'flavors' => ['Rich', 'Indulgent', 'Creamy'],
                'size' => '500ml',
                'is_featured' => true,
                'is_available' => true,
                'stock' => 45,
                'badge' => 'Sale',
            ],
            [
                'name' => 'Strawberry Bliss',
                'slug' => 'strawberry-bliss',
                'description' => 'Fresh strawberry ice cream made with real fruit pieces. Light, fruity, and refreshing.',
                'category' => 'classic',
                'price' => 40000,
                'old_price' => null,
                'image' => null,
                'flavors' => ['Fresh', 'Fruity', 'Sweet'],
                'size' => '500ml',
                'is_featured' => true,
                'is_available' => true,
                'stock' => 60,
                'badge' => 'Hot',
            ],
            [
                'name' => 'Cookies n Cream',
                'slug' => 'cookies-n-cream',
                'description' => 'Vanilla ice cream loaded with crunchy chocolate cookie pieces. A fan favorite!',
                'category' => 'premium',
                'price' => 45000,
                'old_price' => null,
                'image' => null,
                'flavors' => ['Crunchy', 'Sweet', 'Creamy'],
                'size' => '500ml',
                'is_featured' => true,
                'is_available' => true,
                'stock' => 40,
                'badge' => null,
            ],
            [
                'name' => 'Mint Choco Chip',
                'slug' => 'mint-choco-chip',
                'description' => 'Refreshing mint ice cream with dark chocolate chips. Cool and satisfying.',
                'category' => 'premium',
                'price' => 42000,
                'old_price' => null,
                'image' => null,
                'flavors' => ['Fresh', 'Minty', 'Cool'],
                'size' => '500ml',
                'is_featured' => false,
                'is_available' => true,
                'stock' => 35,
                'badge' => null,
            ],
            [
                'name' => 'Salted Caramel Delight',
                'slug' => 'salted-caramel-delight',
                'description' => 'Sweet and salty caramel ice cream with ribbons of caramel sauce. Perfectly balanced.',
                'category' => 'premium',
                'price' => 48000,
                'old_price' => 55000,
                'image' => null,
                'flavors' => ['Sweet', 'Salty', 'Rich'],
                'size' => '500ml',
                'is_featured' => true,
                'is_available' => true,
                'stock' => 30,
                'badge' => 'Sale',
            ],
            [
                'name' => 'Matcha Paradise',
                'slug' => 'matcha-paradise',
                'description' => 'Premium Japanese matcha green tea ice cream. Authentic, earthy, and delicious.',
                'category' => 'premium',
                'price' => 50000,
                'old_price' => null,
                'image' => null,
                'flavors' => ['Earthy', 'Natural', 'Smooth'],
                'size' => '500ml',
                'is_featured' => true,
                'is_available' => true,
                'stock' => 25,
                'badge' => 'New',
            ],
            [
                'name' => 'Mango Tango Sorbet',
                'slug' => 'mango-tango-sorbet',
                'description' => 'Dairy-free mango sorbet made with ripe Alfonso mangoes. Refreshing and natural.',
                'category' => 'sorbet',
                'price' => 38000,
                'old_price' => null,
                'image' => null,
                'flavors' => ['Fresh', 'Fruity', 'Tropical'],
                'size' => '500ml',
                'is_featured' => false,
                'is_available' => true,
                'stock' => 40,
                'badge' => null,
            ],
            [
                'name' => 'Lemon Berry Sorbet',
                'slug' => 'lemon-berry-sorbet',
                'description' => 'Refreshing lemon and mixed berry sorbet. Light, tangy, and perfect for hot days.',
                'category' => 'sorbet',
                'price' => 40000,
                'old_price' => null,
                'image' => null,
                'flavors' => ['Fresh', 'Tart', 'Fruity'],
                'size' => '500ml',
                'is_featured' => false,
                'is_available' => true,
                'stock' => 35,
                'badge' => null,
            ],
            [
                'name' => 'Coconut Paradise Vegan',
                'slug' => 'coconut-paradise-vegan',
                'description' => 'Creamy coconut-based vegan ice cream. Dairy-free and absolutely delicious.',
                'category' => 'vegan',
                'price' => 45000,
                'old_price' => null,
                'image' => null,
                'flavors' => ['Creamy', 'Natural', 'Tropical'],
                'size' => '500ml',
                'is_featured' => false,
                'is_available' => true,
                'stock' => 30,
                'badge' => 'New',
            ],
            [
                'name' => 'Coffee Almond Crunch',
                'slug' => 'coffee-almond-crunch',
                'description' => 'Rich coffee ice cream with roasted almond pieces. Perfect pick-me-up treat.',
                'category' => 'premium',
                'price' => 46000,
                'old_price' => null,
                'image' => null,
                'flavors' => ['Bold', 'Crunchy', 'Rich'],
                'size' => '500ml',
                'is_featured' => false,
                'is_available' => true,
                'stock' => 28,
                'badge' => null,
            ],
            [
                'name' => 'Rocky Road Adventure',
                'slug' => 'rocky-road-adventure',
                'description' => 'Chocolate ice cream with marshmallows and nuts. A classic American favorite.',
                'category' => 'premium',
                'price' => 48000,
                'old_price' => 52000,
                'image' => null,
                'flavors' => ['Rich', 'Crunchy', 'Sweet'],
                'size' => '500ml',
                'is_featured' => false,
                'is_available' => true,
                'stock' => 32,
                'badge' => 'Sale',
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }

        // Generate 8 random products with unique names
        $uniqueNames = [
            'Tiramisu Dream', 'Pistachio Heaven', 'Red Velvet Bliss',
            'Blueberry Cheesecake', 'Hazelnut Crunch', 'Caramel Macchiato',
            'Peanut Butter Cup', 'Dulce de Leche'
        ];

        foreach ($uniqueNames as $index => $name) {
            Product::create([
                'name' => $name,
                'slug' => \Illuminate\Support\Str::slug($name),
                'description' => fake()->paragraph(2),
                'category' => fake()->randomElement(['classic', 'premium', 'sorbet', 'vegan']),
                'price' => fake()->numberBetween(35000, 55000),
                'old_price' => fake()->boolean(30) ? fake()->numberBetween(50000, 65000) : null,
                'image' => null,
                'flavors' => fake()->randomElements(['Sweet', 'Creamy', 'Rich', 'Fresh', 'Smooth'], 2),
                'size' => fake()->randomElement(['250ml', '500ml', '1L']),
                'is_featured' => fake()->boolean(20),
                'is_available' => fake()->boolean(90),
                'stock' => fake()->numberBetween(20, 80),
                'badge' => fake()->randomElement([null, 'New', 'Hot', 'Sale']),
            ]);
        }
    }
}
