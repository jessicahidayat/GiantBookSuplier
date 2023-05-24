<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Bookcategory;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $book = Book::get();

        $category = Category::get();

        return view('welcome', ['books' => $book, 'categories' => $category]);
    }

    public function detailBook($id)
    {
        $book = Book::join('publishers', 'books.publisher_id', '=', 'publishers.id')
            ->select('books.*', 'publishers.name as publishername')
            ->get()
            ->where('id', $id);

        // $book = Book::get()->where('id', $id);

        $category = Category::get();
        // dd($book);

        return view('detailbook', ['books' => $book, 'categories' => $category]);
    }


    public function detailCategory($id)
    {
        $categoriesBook = Bookcategory::leftJoin('categories', 'category_id', '=', 'categories.id')
            ->leftJoin('books', 'books.id', '=', 'book_id')
            ->select('categories.*', 'books.id as bookid', 'books.cover', 'books.title', 'books.author')
            ->where('category_id', $id)
            ->get();

        $categoriesBooks = Bookcategory::leftJoin('categories', 'category_id', '=', 'categories.id')
            ->leftJoin('books', 'books.id', '=', 'book_id')
            ->select('categories.*', 'books.id as bookid', 'books.cover', 'books.title', 'books.author')
            ->where('category_id', $id)
            ->first();

        $category = Category::get();
        // dd($categoriesBook);

        return view('detailcategory', ['categoriesBooks' => $categoriesBooks, 'categoriesBook' => $categoriesBook, 'categories' => $category]);
    }

    public function publisher()
    {
        $publisher = Publisher::get();

        $category = Category::get();
        // dd($category);

        return view('publisher', ['publishers' => $publisher, 'categories' => $category]);
    }

    public function detailPublisher($id)
    {
        $detailbook = Publisher::join('books', 'publishers.id', '=', 'books.publisher_id')
            ->select('publishers.*', 'books.id as bookid', 'books.cover', 'books.title', 'books.author')
            ->where('publisher_id', $id)->get();

        $detailPublishers = Publisher::join('books', 'publishers.id', '=', 'books.publisher_id')
            ->select('publishers.*', 'books.id as bookid', 'books.cover', 'books.title', 'books.author')
            ->where('publisher_id', $id)
            ->first();

        $category = Category::get();
        // dd($detailbook);

        return view('detailpublisher', ['detailPublishers' => $detailPublishers, 'detailbooks' => $detailbook, 'categories' => $category]);
    }

    public function contact()
    {
        $category = Category::get();

        return view('contact', ['categories' => $category]);
    }
}
