<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Factories\CategoryFactory;

class DatabaseSeeder extends Seeder
{
    private const SEEDERS = [
        CategorySeeder::class
    ];
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ContactSeeder::class);
        // foreach (self::SEEDERS as $seeder) {
        // $this->call($seeder);
    }
    // \App\Models\User::factory(10)->create();
}
