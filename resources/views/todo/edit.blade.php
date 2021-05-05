@extends('layouts.app')

@section('content')
<div class="todo-container edit-form">
    <form>
        <div class="mb-3">
        <input type="text" class="form-control" id="exampleInputEmail1" value="{{ $todo->content }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
