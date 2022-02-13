<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [
            ["title" => "書籍A", "author" => "田中太郎"],
            ["title" => "書籍B", "author" => "山田二郎"]
        ];

        foreach ($books as$book) {
            Book::create(["title" => $book["title"] , "author" => $book["author"]]);
        }
    }
}
