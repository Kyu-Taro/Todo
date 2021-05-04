@extends('layouts.app')

@section('content')
<div class="todo-container">
    <form class="todo-add-form" method="POST" action="">
        <input type="text" id="disabledTextInput" class="form-input">
        <button type="submit" class="btn btn-primary">追加</button>
    </form>
    @foreach ($data as $value)
    <div class="card">
        <div class="card-body card-flex">
            {{ $value->content }}
            <div class="fix-btn">
                <button type="button" class="btn btn-success">編集</button>
                <button type="button" class="btn btn-danger">削除</button>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
