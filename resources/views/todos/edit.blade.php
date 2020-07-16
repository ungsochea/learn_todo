@extends('todos.layout')
@section('content')
    <div class="flex justify-between border-b pb-4 px-4">
        <h1 class="text-2xl">Update to do list</h1>
        <a href="{{ route('todos.index') }}" class="mx-5 py-2 text-gray-400 cursor-pointer text-white">
            <span class="fas fa-arrow-left" />
        </a>
    </div>
    <h1 class="text-2xl border-b pb-4">Update to do list</h1>
    <x-alert />
    <form action="{{ route('todos.update',$todo->id) }}" method="post" class="py-5">
        @csrf
        @method('patch')
        <input type="text" name="title" class="py-2 px-2 border rounded" value="{{ $todo->title }}">
        <input type="submit" value="Update" class="p-2 border rounded">
    </form>

@endsection
