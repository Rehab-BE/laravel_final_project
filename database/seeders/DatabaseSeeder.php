<?php

namespace Database\Seeders;
use App\Models\Topic;
use App\Models\Category;
use App\Models\Testimonial;
use App\Models\User;
use App\Models\Contact;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(4)->create();
        Category::factory(3)->create();
        Topic::factory(10)->create();
        Testimonial::factory(10)->create();
        Contact::factory(5)->create();
       
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}