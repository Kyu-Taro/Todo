<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use Illuminate\Support\Facades\Auth;
use App\Services\TodoService;

class TodoController extends Controller
{
    /**
     * 認証ユーザーに該当するTodoを取得する
     *
     * @return \Illuminate\View\View
     */
    public function index() : \Illuminate\View\View
    {
        $data = app(TodoService::class)->index();
        return view('todo.index', compact('data'));
    }
}
