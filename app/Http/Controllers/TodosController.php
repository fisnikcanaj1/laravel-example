<?php

namespace App\Http\Controllers;
use App\TodoMore;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index() {
        $todos = TodoMore::all();

        return view('todos')->with('todos', $todos);
    }

    public function store(Request $request) {
        $todo = new TodoMore;
        $todo->todo_more = $request->todo_more;
        $todo->save();

        return redirect()->back();
    }

    public function delete($id) {
        $todo = TodoMore::find($id);
        $todo->delete();
        return redirect()->back();
    }

    public function update($id) {
        $todo = TodoMore::find($id);
        return view('update')->with('todo', $todo);
    }

}