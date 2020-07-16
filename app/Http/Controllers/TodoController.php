<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoCreateRequest;
use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(){
        $todos = Todo::all();
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
}
