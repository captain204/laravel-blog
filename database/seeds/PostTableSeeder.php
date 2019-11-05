<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->truncate();
        $faker = \Faker\Factory::create();
        foreach(range(1,50) as $index)
        {
            Post::create([
                'title'=>$faker->sentence(2),
                'body'=>$faker->text,
                'author'=>$faker->name
            ]);
        }

    }
}
