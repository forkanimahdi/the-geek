<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LeaderBoardController extends Controller
{
    //
    public function index()
    {
        $users = User::all()->sortBy(function ($user) {
            if ($user->score) {
                return $user->score->score;
            }
            return 0;
        }, descending: true);
        return view("leaderboard.leaderboard", compact("users"));
    }
}
