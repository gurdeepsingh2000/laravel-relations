<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Article;
use App\Author;

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

                for($x = 0; $x < 20; $x++) {

                    $authorPickID = array_rand($authorsArray, 1);
                    $authorChoosed = $authorsArray[$authorPickID];
                    
                    $article = new Article();
                    $article->title = $faker->word(6);
                    $article->cover = $faker->imageUrl(250, 250, 'image', true);
                    $article->description = $faker->word(10);
                    $article->author_id = $authorChoosed;
                    $article->save();
            }
    }
}