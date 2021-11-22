<?php

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
        $this->call(UsersTableSeeder::class);
        // DB::table('users')->insert([
        //     'first_name' => Str::random(10),
        //     'last_name' => Str::random(10),
        //     'phone' => Str::random(10),
        //     'address' => Str::random(30),
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => bcrypt('password'),
        //     'role_id' => 2,
        // ]);
    }
}
