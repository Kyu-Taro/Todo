@extends('layouts.app')

@section('content')
<div class="todo-container edit-form">
    <form action="{{ route('todo.update', ['todo' => $todo->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
        <input type="text" class="form-control" id="exampleInputEmail1" value="{{ $todo->content }}" name="content">
        </div>
        <button type="submit" class="btn btn-primary">変更</button>
    </form>
</div>
@endsection
