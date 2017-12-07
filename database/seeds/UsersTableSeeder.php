<?php

use App\User;
use Faker\Factory;
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
        $faker = Factory::create();

        User::truncate();

        foreach (range(1, 20) as $item) {

            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $faker->password,
                'created_at' => '2017-' . mt_rand(1, 6) . '-' . mt_rand(1, 28) . ' 13:53:31',
                'updated_at' => '2017-' . mt_rand(7, 12) . '-' . mt_rand(1, 28) . ' 13:53:31'
            ]);
        }
    }
}