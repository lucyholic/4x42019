<?php

namespace App\Http\Controllers;

use App\Book;
use App\User;
use App\Http\Requests\BookRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(Auth::id());

        // my books
        $mybooks = $user->books();

        // all books
        $books = Book::paginate(5);
        

        return view('books.index', [
                'books' => $books,
                'mybooks' => $mybooks
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $book = new Book;
        return view('books.create', ['book' => $book]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  BookRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookRequest $request)
    {
        $user = $request->user();
        $book = $user->books()->create($request->all());

        // flash('A book added!', 'success');

        return redirect(route('books.show', $book->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        $book->load('user');
        return view('books.show', ['book' => $book]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('books.edit', ['book' => $book]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  BookRequest  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(BookRequest $request, Book $book)
    {
        $book->update($request->all());
        return redirect(route('books.show', $book->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect(route('books.index'));
    }

    /**
     * Show search form
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        $books = Book::paginate(5);
        return view('books.search', ['books' => $books]);
    }

    /**
     * Display search result
     *
     * @return \Illuminate\Http\Response
     */
    public function result()
    {
        return view('books.result');
    }
}
