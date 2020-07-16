@extends('todos.layout')
@section('content')
    <h1 class="text-2xl">What next you want to-DO</h1>
    <x-alert />
    <form action="/todos/create" method="post" class="py-5">
        @csrf
        <input type="text" name="title" class="py-2 px-2 border rounded">
        <input type="submit" value="Create" class="p-2 border rounded">
    </form>
    <a href="/todos" class="m-5 p-2 bg-white-400 border rounded cursor-pointer">Back</a>

@endsection
