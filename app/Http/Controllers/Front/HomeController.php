<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $categories = Category::take(3)->get();
        $books = Book::take(3)->get();
        return view('front.home' , compact('categories' , 'books'));
    }

    public function login()
    {
        return view('cms.button_users1');
    }

    public function register()
    {
        return view('front.Register');
    }

    public function detaile()
    {
        $books = Book::take(1)->get();
        return view('front.detils' , compact('books'));
    }
    public function card()
    {
        $books = Book::take(3)->get();
        return view('front.Card' , compact('books'));
    }
}
