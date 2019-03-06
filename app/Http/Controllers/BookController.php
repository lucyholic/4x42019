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
        $mybooks = $user->books()->get();

        // borrowing books
        $borrowingBooks = $user->borrowingBooks()
            ->where('records.return_date', null)
            ->get();
        
        // lent out books
        $lentOutBooks = $user->lentOutBooks()
            ->where('records.return_date', null)
            ->get();
        

        return view('books.index', [
                'borrowingBooks' => $borrowingBooks,
                'lentOutBooks' => $lentOutBooks,
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => ['required', 'string'],
            'author' => ['required', 'string'],
            'recommended_age' => ['required', 'numeric'],
            'ISBN' => ['required'],
            'publisher' => ['required', 'string'],
            'cover' => ['mimes:jpeg, jpg, png, gif', 'required', 'max:10000']
        ]);
        $path = $request->file('cover')->store('public/files');
        $path = substr($path, 7);

        $user = $request->user();
        $book = $user->books()->create([
            'title' => $validate['title'],
            'author' => $validate['author'],
            'recommended_age' => $validate['recommended_age'],
            'ISBN' => $validate['ISBN'],
            'publisher' => $validate['publisher'],
            'cover' => $path
        ]);

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
        $books = Book::paginate(10);
        return view('books.search', ['books' => $books]);
    }

    /**
     * Display search result
     *
     * @return \Illuminate\Http\Response
     */
    public function result()
    {
        $books = Book::paginate(10);
        return view('books.result', ['books' => $books]);
    }
}
