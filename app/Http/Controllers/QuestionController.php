<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = [[
            "question" => "La7ya wants to create a website. Which HTML element is used to define the main content of a web page?",
            "options" => [
                "<head>",
                "<body>",
                "<div>",
                "<section>",
            ],
            "correctAnswer" => "<body>",
        ]];
        return view('questions.question', compact("questions"));
    }

    public function show()
    {
        return view('introduction.intro');
    }

    public function result()
    {
        return view('results.result');
    }
}
