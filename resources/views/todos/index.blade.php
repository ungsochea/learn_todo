@extends('todos.layout')
@section('content')
    <div class="flex justify-center border-b pb-4">
        <h1 class="text-2xl">All Your Todos</h1>
        <a href="{{ route('todos.create') }}" class="mx-5 py-2 text-blue-400 cursor-pointer text-white">
            <span class="fas fa-plus-circle" />
        </a>
    </div>
    <x-alert />
    <ul class="my-5">
        @foreach ($todos as $todo)
            <li class="flex justify-between py-2">
                <p class="px-2 {{ $todo->completed ? 'line-through':''}}">{{ $todo->title }}</p>
                <div>
                    <a href="{{ route('todos.edit',$todo->id)}}" class="text-orange-400 cursor-pointer text-white">
                        <span class="fas fa-edit px-2" />
                    </a>
                    @if ($todo->completed)
                        <span onclick="event.preventDefault();document.getElementById('form-incomplete-{{ $todo->id }}').submit()" class="fas fa-check text-green-400 px-2" />
                        <form action="{{ route('todos.incomplete',$todo->id)}}" id="form-incomplete-{{ $todo->id }}" method="post" style="display: none">
                            @csrf
                            @method('put')
                        </form>
                    @else
                        <span onclick="event.preventDefault();document.getElementById('form-complete-{{ $todo->id }}').submit()" class="fas fa-check text-gray-300 px-2" />
                        <form action="{{ route('todos.complete',$todo->id)}}" id="form-complete-{{ $todo->id }}" method="post" style="display: none">
                            @csrf
                            @method('put')
                        </form>
                    @endif
                </div>
                {{--  <a href="{{ route('todos.destroy',$todo->id)}}" class="mx-0 p-2 bg-red-400 cursor-pointer rounded text-white">Delete</a>  --}}
            </li>
        @endforeach
    </ul>

@endsection
