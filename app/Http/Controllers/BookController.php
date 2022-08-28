<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Book;
use App\Models\AuthorsToBook;
use App\Models\Author;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;
use Illuminate\Pagination\Paginator;

class BookController extends Controller
{
    public function index(){
        $recent_books = Book::whereDate('created_at','<', today())->inStock()->limit(12)->get();
        $categories = Category::all();
        return view('books.index', compact('categories', 'recent_books'));
    }

    public function show(Book $book){
        return view('books.show', compact('book'));
    }

    public function shop(){
        // $books = Book::whereBetween('price', [0, 50])->pluck('price');
        // dd($books);
        //dd(request());
        $books = QueryBuilder::for(Book::class)
            ->allowedFilters([
                AllowedFilter::scope('price_between'),
            ])
            ->allowedSorts('price', 'pages');
            //->appends(request()->query());
        //dd($books);
        //return view('books.shop', compact('books'));
        return response()->json(['request'=>$books->paginate(20), 'links'=>request()->all()]);
    }

    public function filter(Request $request){
        return response()->json(['msg'=>'Message']);
    }

}

/*

 /books?filter[id]=1,2,3,4,5&filter[admin]=true
/books?filter[price_between]=100, 200
*/
