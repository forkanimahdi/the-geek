<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index() {
        return view('questions.question');
    }
    public function show() {
        return view('introduction.intro');
    }
    public function result() {
        return view('results.result');
    }
}
