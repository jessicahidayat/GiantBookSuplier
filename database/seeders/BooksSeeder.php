<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Publisher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 20; $i++) {
            Book::create([
                'publisher_id' => Publisher::inRandomOrder()->first()->id,
                'cover' => 'images/bookcovers.jpeg',
                'title' => $faker->sentence(3),
                'year' => $faker->year,
                'author' => $faker->name,
                'synopsis' => $faker->text(2000)
            ]);
        }
    }
}
