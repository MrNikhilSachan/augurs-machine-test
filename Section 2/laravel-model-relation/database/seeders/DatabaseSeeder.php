<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();


        for($i = 0;$i<=10;$i++){
            \App\Models\Post::create([
                "user_id" => 1,
                "title" => "title".$i,
                "content" => "content".$i,
                "status" => 0
            ]);
        }
    }
}
