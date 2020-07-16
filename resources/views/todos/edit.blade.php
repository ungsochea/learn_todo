@extends('todos.layout')
@section('content')
    <h1 class="text-2xl border-b pb-4">Update to do list</h1>
    <x-alert />
    <form action="{{ route('todos.update',$todo->id) }}" method="post" class="py-5">
        @csrf
        @method('patch')
        <input type="text" name="title" class="py-2 px-2 border rounded" value="{{ $todo->title }}">
        <input type="submit" value="Update" class="p-2 border rounded">
    </form>
    <a href="{{ route('todos.index') }}" class="m-5 p-2 bg-white-400 border rounded cursor-pointer">Back</a>

@endsection
