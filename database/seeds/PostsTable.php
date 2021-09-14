<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;

class PostsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker) 
    {
        for($x = 0; $x < 50; $x++) {
            $postObj = new Post();
            $postObj->username = $faker->word(5);
            $postObj->caption = $faker->paragraph(150);
                                    // imageUrl(width, height, category-text on the image, gray)
            $postObj->image = $faker->imageUrl(250, 250, 'post', true);
            $postObj->position = $faker->word(2);
            $postObj->title = $faker->sentence(1);
            $postObj->name = $faker->word(3);
            $postObj->surname = $faker->word(3);
            $postObj->summary = $faker->sentence(10);
            $postObj->save();
        }
    }
}
