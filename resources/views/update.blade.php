@extends('layout')

@section('content')

    <div class="row justify-content-md-center my-4">
        <div class="col-lg-6">
            <form action="/create/todo" method="post">
                {{ csrf_field() }}
                <input type="text" class="form-control" placeholder="Create new todo" value="{{ $todo->todo_more }}" name="todo_more">
            </form>
        </div>
    </div>

@stop