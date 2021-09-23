<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $authorsArray = [];

        for($i = 0; $i < 20; $i++){

            $author = new Author();
            $author->name = $faker->word(1);
            $author->surname =$faker->word(1);
            $author->mail =$faker->email();
            $author->save();
            $authorsArray[] = $author->id;

        }

        //seeder post
    }
}
