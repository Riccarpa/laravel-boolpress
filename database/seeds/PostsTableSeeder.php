<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Post;
use Illuminate\Support\Str;


class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0;$i<50;$i++){
            $newPost = new Post();
            $newPost->title = $faker->text(30);
            $newPost->content = $faker->text(400);
            $newPost->image = $faker->imageUrl();
            $newPost->slug = Str::slug($newPost->title, '-');
            $newPost->save();
        }
    }
}
