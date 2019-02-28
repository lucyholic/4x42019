<?php

namespace App\Http\Controllers;

use App\Goal;
use App\Kid;
use App\Http\Requests\GoalRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return abort(404);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kids = Kid::where('user_id', Auth::id())->get();
        $goal = new Goal;
        return view('goals.create', ['goal' => $goal, 'kids' => $kids]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  GoalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GoalRequest $request)
    {  
        $goal = Goal::create($request->all());

        return redirect(route('goals.show', $goal->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function show(Goal $goal)
    {
        $goal->load('kid');
        $kid = Kid::where('id', $goal->kid_id)->first();
        return view('goals.show', ['goal' => $goal,
            'kid' => $kid]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function edit(Goal $goal)
    {
        return view('goals.edit', ['goal' => $goal]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  GoalRequest  $request
     * @param  \App\Goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function update(GoalRequest $request, Goal $goal)
    {
        $goal->update($request->all());
        return redirect(route('goals.show', $goal->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Goal $goal)
    {
        //
    }
}
