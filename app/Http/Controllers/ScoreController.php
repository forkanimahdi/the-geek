<?php

namespace App\Http\Controllers;

use App\Models\Score;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("leaderboard");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $score = Score::create([
            "user_id" => $request->user()->id,
            "score" => $request->score,
        ]);

        if ($request->score >= 50) {
            return Redirect::away("https://youtu.be/dQw4w9WgXcQ?si=5MKKhCNe7rWoDMa7");
        }
        
        return Redirect::away("https://youtu.be/umDr0mPuyQc?si=1LLE-z-PLF6vdn2v");
    }

    /**
     * Display the specified resource.
     */
    public function show(Score $score)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Score $score)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Score $score)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Score $score)
    {
        //
    }
}
