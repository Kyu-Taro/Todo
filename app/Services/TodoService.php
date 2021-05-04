<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;
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
}
