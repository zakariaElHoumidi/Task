<?php

namespace App\Http\Controllers;

class TaskController extends Controller
{
    public function __invoke()
    {
        return view('tasks.index');
    }
}
