<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Post;
use App\Models\Category;
use App\Models\Address;
use App\Models\Order;
use App\Models\Review;
use App\Models\OrderProduct;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Product::factory(20)->create();

        // $users = User::factory(10)->create();

        // Post::factory(2000)
        // ->recycle($users)
        // ->create();
        $categories = Category::factory(10)->create();

            Category::factory(10)->create();
            Address::factory(10)->create();
            Order::factory(10)->create();
            Review::factory(10)->create();
            OrderProduct::factory(10)->create();
            Product::factory(2000)->recycle($categories)->create();

    }
}
