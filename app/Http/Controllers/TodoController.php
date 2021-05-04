<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use Illuminate\Support\Facades\Auth;
use App\Services\TodoService;
use App\Http\Requests\TodoRequest;

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


    /**
     * Todoの新規登録
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(TodoRequest $request) : \Illuminate\Http\RedirectResponse
    {
        app(TodoService::class)->store($request);
        return redirect(route('todo.index'));
    }
}
