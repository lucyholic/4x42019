<?php

namespace App\Http\Controllers;

use App\Kid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KidController extends Controller
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
        $user_id = Auth::id();
        $kids = Kid::where('user_id', $user_id)
            ->get();
        return view('kids.index', ['kids' => $kids]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kid = new Kid;
        return view('kids.create', ['kid' => $kid]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = Auth::id();
        $validateData = $request->validate([
            'firstName' => ['required'],
            'lastName' => ['required'],
            'school' => ['required'],
            'DOB' => ['required', 'date', 'before:today']
        ]);

        //$kid = $user->kids()->create($validateData->all());

        $kid = Kid::create([    
            'user_id' => $user_id,
            'firstName' => $validateData['firstName'],
            'lastName' => $validateData['lastName'],
            'school' => $validateData['school'],
            'DOB' => $validateData['DOB']
        ]);

        flash('A kid added!', 'success');

        return redirect(route('kids.show', $kid->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kid  $kid
     * @return \Illuminate\Http\Response
     */
    public function show(Kid $kid)
    {
        $kid->load('user', 'goals');
        return view('kids.show', ['kid' => $kid]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kid  $kid
     * @return \Illuminate\Http\Response
     */
    public function edit(Kid $kid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kid  $kid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kid $kid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kid  $kid
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kid $kid)
    {
        //
    }
}
