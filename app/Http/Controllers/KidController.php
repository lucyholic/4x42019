<?php

namespace App\Http\Controllers;

use App\Kid;
use App\Goal;
use App\Http\Requests\KidRequest;
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
            ->orderBy('DOB')
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
     * @param  KidRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KidRequest $request)
    {
        $user = $request->user();
        $kid = $user->kids()->create($request->all());

        // flash('A kid added!', 'success');

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

        if ($kid->isMyKid())
        {
            $goals = Goal::where('kid_id', $kid->id)->get();
            return view('kids.show', ['kid' => $kid, 'goals' => $goals]);
        }

        else
        {
            return \abort(404);
        }

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kid  $kid
     * @return \Illuminate\Http\Response
     */
    public function edit(Kid $kid)
    {
        return view('kids.edit', ['kid' => $kid]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  KidRequest  $request
     * @param  \App\Kid  $kid
     * @return \Illuminate\Http\Response
     */
    public function update(KidRequest $request, Kid $kid)
    {
        $kid->update($request->all());
        return redirect(route('kids.show', $kid->id));
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
