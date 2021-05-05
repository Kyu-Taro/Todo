<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Todo;

class TodoService {

    /**
     * 認証ユーザーと一致するTodoを取得する
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function index() : \Illuminate\Database\Eloquent\Collection
    {
        $data = Todo::where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();
        return $data;
    }

    /**
     * Todoの新規登録処理
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request) : void
    {
        $form = $request->all();
        unset($form['_token']);
        $todo = new Todo();
        $todo->fill($form)->save();
    }

    /**
     * Todoの削除処理
     *
     * @param Todo $todo
     * @return void
     */
    public function destroy(Todo $todo) : void
    {
        $todo->delete();
    }

    /**
     * 特定のTodoの編集処理
     *
     * @param Request $request
     * @param Todo $todo
     * @return void
     */
    public function update(Request $request, Todo $todo) : void
    {
        $form = $request->all();
        unset($form['_token']);
        $todo->fill($form)->save();
    }
}
