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
        \App\Models\User::factory(10)->create();
        \App\Models\Category::factory(5)->create();
        \App\Models\Project::factory(10)->create();
        \App\Models\Article::factory(10)->create();
        \App\Models\Tag::factory(10)->create();
        \App\Models\Image::factory(10)->create();
        \App\Models\Message::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('12345678'),
        ]);

        $images = \App\Models\Image::all();
        $articles = \App\Models\Article::all(); 
        $tags = \App\Models\Tag::all();
        $projects = \App\Models\Project::all();

        foreach($articles as $article){
            $article->tags()->attach($tags->random(rand(1,3)));
            $article->images()->attach($images->random(rand(1,3)));
        }

        foreach($projects as $project){
            $project->tags()->attach($tags->random(rand(1,3)));
            $project->images()->attach($images->random(rand(1,3)));
        }
    }
}
