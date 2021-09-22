<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Category;
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
        // la lista delle varie categorie dei post
        $categoryList = [
            'sport',
            'lifestyle',
            'entertainment',
            'news',
            'food'
        ];

        $listOfCatID = [];

        foreach($categoryList as $category) {
            $catObj = new Category();
            $catObj->name = $category;
            $catObj->save();
            $listOfCatID[] = $catObj->id;
        }

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

            $randCatKey = array_rand($listOfCatID, 1);
            $categoryID = $listOfCatID[$randCatKey];
            $postObj->category_id = $categoryID;

            $postObj->save();
        }
    }
}
