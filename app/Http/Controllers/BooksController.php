<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index(){
        $books = Book::orderBy('id','asc')->get();
        return view('book.show',compact('books'));
              
              
    }
    public function view($id)
    {
        $books = Book::find($id);
        return view("book.view",compact('books'));
    }
    public function create(){
        return view('book.create');
    }

    public function store(Request $request){
        $request->validate([
            'book_name' => 'required|max:150',
            'writer'    => 'required',
            'publisher'    => 'required',
            'language'    => 'required',
            'total_items'    => 'required|integer',
        ]);

        $books = new Book;
        $books->book_name = $request->book_name;
        $books->writer = $request->writer;
        $books->publisher = $request->publisher;
        $books->language = $request->language;
        $books->total_items = $request->total_items;
        $books->book_details = $request->book_details;
        $books->save();

         session()->flash('success', 'New Book Added successfully..!!');
        return redirect()->route("admin.book.create");
    }
    public function edit($id){

        $books = Book::find($id);
        return view("book.edit",compact('books'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'book_name' => 'required|max:150',
            'writer'    => 'required',
            'publisher'    => 'required',
            'language'    => 'required',
            'total_items'    => 'required|integer',
        ]);

        $books = Student::find($id);
        $books->book_name = $request->book_name;
        $books->writer = $request->writer;
        $books->publisher = $request->publisher;
        $books->language = $request->language;
        $books->total_items = $request->total_items;
        $books->book_details = $request->book_details;
        $books->save();

        session()->flash('success', 'Book Updated successfully..!!');
        return redirect()->route("admin.book.show");
    }
    public function delete($id){
       
        $books = Book::find($id);
        if(!is_null('$books')){
            $books->delete();
        }
        session()->flash('success', 'Book deleted successfully..!!');
        return back();
  }

}
