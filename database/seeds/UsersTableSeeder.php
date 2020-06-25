<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 50)->create();

        \App\User::create([
            'name' => 'Jubaer',
            'email' => 'jubaer01.cse@gmail.com',
            'password' => bcrypt('12345678'),
            'is_admin' => true,
            'remember_token' => Str::random(10),
        ]);
    }
}
