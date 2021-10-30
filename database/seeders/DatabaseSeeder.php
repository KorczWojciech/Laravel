<?php

namespace Database\Seeders;

use App\Models\Author;
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
        $this->call(BooksTabSeeder::class);
        $this->call(AuthorsTabSeeder::class);
        $this->call(RentTabSeeder::class);
    }
}
