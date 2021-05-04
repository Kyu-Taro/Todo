@extends('layouts.app')

@section('content')
<div class="todo-container">
    @if($errors->has('content'))
        <span class="error_msg">{{ $errors->first('content') }}</span>
    @endif
    <form class="todo-add-form" method="POST" action="{{ route('todo.store') }}">
        @csrf
        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
        <input type="text" id="disabledTextInput" class="form-input" name="content">
        <button type="submit" class="btn btn-primary">追加</button>
    </form>
    @foreach ($data as $value)
    <div class="card">
        <div class="card-body card-flex">
            {{ $value->content }}
            <div class="fix-btn">
                <form action="" method="POST" class="edit-delete-btn">
                    @csrf
                    <button type="submit" class="btn btn-success">編集</button>
                </form>
                <form action="{{ route('todo.destroy', ['todo' => $value->id]) }}" method="POST" class="edit-delete-btn">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="confirm('{{ $value->content }}を削除しますか?')">削除</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
