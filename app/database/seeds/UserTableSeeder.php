<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();



        foreach(range(1, 20) as $index)
        {
            $fullName = $faker->name;

            $user =User::create([

                'full_name'      =>  $fullName,
                'username'       =>  $faker->userName,
                'identification' => $faker->ipv4,
                'email'          =>  $faker->email,
                'password'       =>  '1',
                'type'           =>  $faker->randomElement(['admin','customer','guest']),
                'slug'           =>  \Str::slug($fullName)

            ]);


        }
    }

}