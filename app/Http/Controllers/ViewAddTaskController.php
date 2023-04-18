<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewAddTaskController extends Controller
{
    public function index()
    {
        return view('todo.add.index');
    }
}
