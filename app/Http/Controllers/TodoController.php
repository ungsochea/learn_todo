<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoCreateRequest;
use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(){
        $todos = Todo::orderBy('completed')->get();
        return view('todos.index',compact('todos'));
    }
    public function create(){
        return view('todos.create');
    }
    public function edit(Todo $todo){
        return view('todos.edit',compact('todo'));
    }
    public function store(TodoCreateRequest $request){
        Todo::create($request->all());
        return redirect()->back()->with('message','Todo created successfully !');
    }
    public function update(TodoCreateRequest $request,Todo $todo){
        $todo->update($request->all());
        return redirect()->back()->with('message','Todo updated successfully !');
    }
    public function destroy(Todo $todo){
        $todo->delete();
        return redirect()->back()->with('message','Todo deleted successfully !');
    }
    public function complete(Todo $todo){
        $todo->update(['completed'=>true]);
        return redirect()->back()->with('message','Task marked as completed !');
    }
    public function incomplete(Todo $todo){
        $todo->update(['completed'=>false]);
        return redirect()->back()->with('message','Task marked as incompleted !');
    }
}
