<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function create(){
    	return view('book.create');
    }

    public function update(Request $request, $id){
        $data = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'rating' => 'required'
        ]);
        $book = Book::find($id);
        $book->title = $request->get('title');
        $book->author = $request->get('author');
        $book->rating = $request->get('rating');
        $book->save();
        return redirect('/');
    }

    public function store(Request $request){
    	$data = $request->validate([
    		'title' => 'required',
    		'author' => 'required',
    		'rating' => 'required'
    	]);

    	Book::create($data);
    	return 1;
    }

    public function edit($id){
        $book = Book::findOrFail($id);
        return view('book.create',compact('book'));
    }

    public function getbooks(){
        $books = Book::orderBy('created_at', 'desc')->get();
        foreach ($books as $b) {
            if($b->image == null){
                $b->image = 'book.jpg';
            }
        }
        return view('includes.singlebook',compact('books'));
    }

    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();

        return redirect('/');
    }
}
