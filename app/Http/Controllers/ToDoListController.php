<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToDoListController extends Controller
{
    public function index()
    {
        return view('todo.index');
    }

    public function add()
    {
        return view('todo.add');
    }
}
