<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstName', 
        'lastName',
        'email', 
        'password',
        'street',
        'city',
        'province',
        'postalCode'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function books() {
        return $this->hasMany(Book::class);
    }

    public function kids() {
        return $this->hasMany(Kid::class);
    }

    public function records() {
        return $this->hasMany(Record::class);
    }

    public function borrowingBooks() {
        $books = DB::table('books')
            ->join('users', 'books.user_id', '=', 'users.id')
            ->join('records', 'books.id', '=', 'records.book_id')
            ->select('books.*', 'records.checkout_date as checkout_date', 'records.return_date as return_date')
            ->orderBy('records.id', 'DESC')
            ->where('records.user_id', Auth::id());

        return $books;
    }

    public function lentOutBooks() {
        $books = DB::table('books')
            ->join('users', 'books.user_id', '=', 'users.id')
            ->join('records', 'books.id', '=', 'records.book_id')
            ->select('books.*', 'users.firstName as firstName', 'users.lastName as lastName', 
                'records.checkout_date as checkout_date', 'records.return_date as return_date')
            ->orderBy('records.id', 'DESC')
            ->where('users.id', Auth::id());

        return $books;
    }

    public function borrowingHistory() {
        $records = Record::join('users', 'records.user_id', '=', 'users.id')
            ->join('books', 'records.book_id', '=', 'books.id')
            ->orderBy('records.id', 'DESC')
            ->where('records.user_id', Auth::id());

        return $records;
    }

    public function lentOutHistory() {
        $records = Record::join('users', 'records.user_id', '=', 'users.id')
            ->join('books', 'records.book_id', '=', 'books.id')
            ->orderBy('records.id', 'DESC')
            ->where('users.id', Auth::id());

        return $records;
    }
}
