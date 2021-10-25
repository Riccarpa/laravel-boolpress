<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Generator as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $newUser = new User();
        $newUser->name='Riccardo';
        $newUser->email='riccardopagni99@gmail.com';
        $newUser->password=bcrypt('password');
        $newUser->save();

        for($i=0;$i<9;$i++){
            $newUser = new User();
            $newUser->name=$faker->userName();
            $newUser->email=$faker->email();
            $newUser->password=bcrypt($faker->word());
            $newUser->save();
        }

    }
}
