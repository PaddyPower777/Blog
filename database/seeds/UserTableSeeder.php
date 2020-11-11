<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 100; $i++) {
            DB::table('users')->insert([
            'username' => $faker->userName,
            'email' => $faker->email,
            'first_name' => $faker->firstName,
            'last_name' => $faker->lastName,
            'password' => bcrypt('123456'),
            'created_at' => $faker->dateTimeThisDecade($max = 'now', 'UTC'),
            'updated_at' => $faker->dateTimeThisDecade($max = 'now', 'UTC'),
            ]);
        }
    }
}
