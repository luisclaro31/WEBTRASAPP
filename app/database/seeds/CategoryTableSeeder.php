<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CategoryTableSeeder extends Seeder {

    public function run()
    {
        category::create([
            'id'=>1,
            'name'=>'Backend developers',
            'slug'=>'backend-developers',
        ]);

        category::create([
            'id'=>2,
            'name'=>'Frontend developers',
            'slug'=>'frontend-developers',
        ]);

        category::create([
            'id'=>3,
            'name'=>'Designers',
            'slug'=>'designers',
        ]);
    }

}