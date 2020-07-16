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
