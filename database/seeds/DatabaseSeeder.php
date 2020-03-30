<?php

use Illuminate\Database\Eloquent\Model;
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
        Model::unguard();

        $this->call(users_seeder::class);
//        $this->call(posts_seeder::class);
        $this->call(comments_seeder::class);

        Model::reguard();

        // $this->call(UsersTableSeeder::class);
    }
}
