@extends('layout')

@section('content')

    <div class="row justify-content-md-center my-4">
        <div class="col-lg-6">
            <form action="/create/todo" method="post">
                {{ csrf_field() }}
                <input type="text" class="form-control" placeholder="Create new todo" name="todo_more">
            </form>
        </div>
    </div>

    @foreach($todos as $todo_more)
        <hr>
        {{ $todo_more->todo_more }} <a class="btn btn-danger" href="{{ route('todo.delete', ['id' => $todo_more->id]) }}"> Delete </a>
        <a class="btn btn-info" href="{{ route('todo.update', ['id' => $todo_more->id]) }}"> Update </a>
        <hr>
    @endforeach
@stop