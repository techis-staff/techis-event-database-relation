<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Book;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::class::factory(5)->create()->each(function ($user) {
            //create 5 posts for each user
            Book::class::factory(10)->create(['user_id' => $user->id]);
        });
    }
}
