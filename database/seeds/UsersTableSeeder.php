<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => Str::random(10),
            'username' => 'admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
