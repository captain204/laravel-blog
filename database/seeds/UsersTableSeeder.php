<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $faker = \Faker\Factory::create();
        # Make hashed password
        $password = Hash::make('captain');
        $number = 1234;
        User::create([
            'name'=>'Administrator',
            'email'=>'[email protected]',
            'password'=>$password,
            'api_token'=>$number,

        ]);

        for ($i = 0; $i < 10; $i++) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $password,
                'api_token'=> $number,
            ]);
        }
    }
}
