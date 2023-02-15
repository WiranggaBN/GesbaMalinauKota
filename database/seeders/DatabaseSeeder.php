<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Sejarah;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        Sejarah::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Yusri', 
        //     'email' => 'yusrimp@gmail.com',
        //     'password' => bcrypt('12345678')
        // ]);

        // Sejarah::create([
        //     'slug' => 'sejarah-gereja', 
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi ad atque nobis accusantium? Voluptatem repellat adipisci nostrum consectetur enim. Laborum adipisci consequatur, laboriosam sit labore blanditiis aliquid? Adipisci nemo distinctio perferendis atque, vitae suscipit quisquam esse laboriosam, nesciunt soluta pariatur providenteligendi dolores! Fuga illo explicabo, dolor quo alias ut earum consequaturmaiores, ipsa rem dignissimos! Ratione, ut reprehenderit ex hic nulla quaeillum saepe consequatur nam ipsam sequi sed placeat cupiditate mollitia, voluptates beatae optio illo ad porro esse pariatur.Ducimus consectetur nam commodi repudiandae excepturi minus porro! Molestiaeerror voluptatibus similique odio, id dignissimos ipsum vel voluptate natusconsequuntur iste perspiciatis aut hic laboriosam laudantium assumenda. Quosveniam quam aspernatur at minima, fuga ipsam ab? Fugit, ratione. Cum.',
        //     'user_id' => 1
        // ]);
    }
}
