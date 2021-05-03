<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    public function index()
    {
        $data = Todo::where('user_id', Auth::id())->get();
        return view('todo.index', compact('data'));
    }
}
