@extends('layouts.app')

@section('content')
<form>
    <div class="mb-3">
        <input type="text" id="disabledTextInput" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">追加</button>
</form>
@foreach ($data as $value)
<div class="card">
    <div class="card-body">
        {{ $value->content }}
        <button type="button" class="btn btn-success">編集</button>
        <button type="button" class="btn btn-danger">削除</button>
    </div>
</div>
@endforeach
@endsection
