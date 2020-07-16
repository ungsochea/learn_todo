@extends('todos.layout')
@section('content')
    <div class="flex justify-between border-b pb-4 px-4">
        <h1 class="text-2xl">All Your Todos</h1>
        <a href="{{ route('todos.create') }}" class="mx-5 py-2 text-blue-400 cursor-pointer text-white">
            <span class="fas fa-plus-circle" />
        </a>
    </div>
    <x-alert />
    <ul class="my-5">
        @forelse ($todos as $todo)
            <li class="flex justify-between py-2">
                <div>
                    @include('todos.complete_button')
                </div>
                <p class="px-2 {{ $todo->completed ? 'line-through':''}}">{{ $todo->title }}</p>
                <div>
                    <a href="{{ route('todos.edit',$todo->id)}}" class="text-orange-400 cursor-pointer text-white">
                        <span class="fas fa-edit px-2" />
                    </a>
                    <span onclick="event.preventDefault();if(confirm('Are you really want to delete ?')){document.getElementById('form-delete-{{ $todo->id }}').submit()}" class="fas fa-trash px-2 text-red-400 cursor-pointer text-white" />
                    <form action="{{ route('todos.destroy',$todo->id)}}" id="form-delete-{{ $todo->id }}" method="post" style="display: none">
                        @csrf
                        @method('delete')
                    </form>
                </div>
                {{--  <a href="{{ route('todos.destroy',$todo->id)}}" class="mx-0 p-2 bg-red-400 cursor-pointer rounded text-white">Delete</a>  --}}
            </li>
        @empty
            <p>No task available , create one.</p>
        @endforelse
    </ul>

@endsection
