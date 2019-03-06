<?php

namespace App\Http\Controllers;

use App\Record;
use App\Book;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\RecordRequest;
use Illuminate\Support\Facades\Auth;

class RecordController extends Controller
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
        $user = User::where('id', Auth::id())->first();
        $borrowingHistory = $user->borrowingHistory()->get();
        $lentOutHistory = $user->lentOutHistory()->get();

        return view('records.index', ['borrowingHistory' => $borrowingHistory,
            'lentOutHistory' => $lentOutHistory]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param   Book $book
     * @return \Illuminate\Http\Response
     */
    public function create(Book $book)
    {
        $record = new Record;
        $owner = $book->user()->first();
        $recentRecord = $book->records()->latest()->first();
        return view('records.borrow', [
            'record' => $record, 
            'book' => $book, 
            'owner' => $owner,
            'recentRecord' => $recentRecord
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  RecordRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RecordRequest $request)
    {
        $user = $request->user();
        $record = $user->records()->create($request->all());

        return redirect(route('records.show', $record->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function show(Record $record)
    {
        $record->load('user');
        $book = $record->book()->first();

        return view('records.show', ['record' => $record, 'book' => $book]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function edit(Record $record)
    {
        return view('records.return', ['record' => $record]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Record $record)
    {
        $validate = $request->validate([
            'return_date' => ['required', 'date']
        ]);

        $record->update([
            'return_date' => $validate['return_date']
        ]);

        // flash('Book is returned!', 'success');

        return redirect(route('records.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function destroy(Record $record)
    {
        //
    }
}
