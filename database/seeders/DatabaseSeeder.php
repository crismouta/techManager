<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::factory()->create(['name' => 'root', 'email' => 'root@root.com']);
        User::factory(10)->create();
        /* Event::factory()->create(['title' => 'Women in technology', 'description' => 'A case for positive            discrimination', 'image'=>'', 'capacity'=>'']); */
        Event::factory()->create(['title' => 'Agile mindset nobody expects the Spanish inquisition', 'description' => 'How to become friends with adversity', 'image'=>'img/agile-mindset.jpg', 'capacity'=>'17']);
        /* Event::factory()->create(['title' => 'Break into Web Development', 'description' => 'How to get started as a web developer and build solid apps', 'image'=>'', 'capacity'=>'']);
        Event::factory()->create(['title' => 'Populism: a defense', 'description' => 'Why all politicians should be populists', 'image'=>'', 'capacity'=>'']);
        Event::factory()->create(['title' => 'Laravel 8 for Begginers', 'description' => 'Life is CRUD(e)', 'image'=>'', 'capacity'=>'']);
 */
    }
}
