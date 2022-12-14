<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@page.com',
            'password' => bcrypt('admin1234'),
        ]);

        $this->call([
            CategoriesSeeder::class,
            ProductSeeder::class,
            ReviewsSeeder::class,
        ]);
    }
}
