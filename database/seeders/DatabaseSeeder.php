<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Listing;
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
        // \App\Models\User::factory(5)->create();
        $user = User::factory()->create([
            "name"=>"john Doe",
             "email" =>"john@gmail.com"
        ]);

        Listing::factory(6)->create([
            "user_id" => $user->id
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // Listing::create([
        //     "title"=>"laravel Senior Developer",
        //     "tags"=>"laravel, javascript",
        //     "company"=>"Acme Corp",
        //     "location"=>"Boston",
        //     "email"=>"email@email.com",
        //     "website"=>"https:/www.acme.com",
        //     "description"=>"A Software Engineer
        //      is a professional responsible for 
        //      designing, developing, testing, 
        //      and maintaining software applications 
        //      and systems. 
        //      They play a crucial role in the software development lifecycle and work collaboratively with cross-functional teams to ensure the successful delivery of high-quality software solutions. The specifics of the role may vary depending on the company and industry, but here is a general description of the responsibilities and qualifications of a Software Engineer:",

        // ]);
        // Listing::create([
        //     "title"=>"laravel Senior Developer",
        //     "tags"=>"laravel, javascript",
        //     "company"=>"Acme Corp",
        //     "location"=>"Boston",
        //     "email"=>"email@email.com",
        //     "website"=>"https:/www.acme.com",
        //     "description"=>"A Software Engineer
        //      is a professional responsible for 
        //      designing, developing, testing, 
        //      and maintaining software applications 
        //      and systems. 
        //      They play a crucial role in the software development lifecycle and work collaboratively with cross-functional teams to ensure the successful delivery of high-quality software solutions. The specifics of the role may vary depending on the company and industry, but here is a general description of the responsibilities and qualifications of a Software Engineer:",
        // ]);
    }
}
