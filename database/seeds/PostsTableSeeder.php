<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;



class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $categories_id=Category::select('id')->pluck('id')->toArray();
        $user_ids=User::select('id')->pluck('id')->toArray();




        for($i=0;$i<50;$i++){
            $newPost = new Post();
            $newPost->category_id = Arr::random($categories_id);
            $newPost->user_id = Arr::random($user_ids);
            $newPost->title = $faker->text(30);
            $newPost->content = $faker->text(400);
            $newPost->image = $faker->imageUrl();
            $newPost->slug = Str::slug($newPost->title, '-');
            $newPost->save();
        }
    }
}
