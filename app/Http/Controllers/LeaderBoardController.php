<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeaderBoardController extends Controller
{
    //
    public function index(){
        return view("leaderboard.leaderboard");
    }
}
