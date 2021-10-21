<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category_name=['Cronaca','Rosa','Giallo','Storico','Commedia'];

        foreach($category_name as $name){
            $category = new Category;
            $category->name = $name;
            $category->save();
        }
    }
}
