<?php

namespace App\Http\Controllers;
use App\Book;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
    	$books = Book::orderBy('created_at', 'desc')->get();
    	foreach ($books as $b) {
    		if($b->image == null){
    			$b->image = 'book.jpg';
    		}
    	}
    	return view('index',compact('books'));
    }
}
