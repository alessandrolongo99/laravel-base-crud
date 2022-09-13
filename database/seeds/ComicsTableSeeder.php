<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newComic = new Comic();
            $newComic->title = $faker->word;
            $newComic->author = $faker->userName;
            $newComic->page_number = $faker->numberBetween(100, 200);
            $newComic->editor = $faker->randomElement(['DC', 'Marvel']);
            $newComic->save();
        }
    }
}
