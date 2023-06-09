<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Bookcategory;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookcategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<=25; $i++){
            Bookcategory::create([
                'book_id' => Book::inRandomOrder()->first()->id,
                'category_id' =>Category::inRandomOrder()->first()->id
            ]);
        }
    }
}
