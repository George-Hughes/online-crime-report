<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\CrimeType;
use App\Models\News;
use Database\Factories\NewsFactory;
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
        \App\Models\User::factory(20)->create();

        News::factory(5)->create();
        // CrimeType::factory(2)->create();

        // News::create(
        //     [
        //     'title' => 'Kidnap',
        //     'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat magnam dolor porro pariatur, a adipisci maxime, debitis eveniet odio at placeat architecto esse sit autem. Veritatis, recusandae! Commodi, mollitia in?'
        // ]);
        // News::create(
        //     [
        //     'title' => 'Breaking In',
        //     'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat magnam dolor porro pariatur, a adipisci maxime, debitis eveniet odio at placeat architecto esse sit autem. Veritatis, recusandae! Commodi, mollitia in?'
        // ]);
    }
}