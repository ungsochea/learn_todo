<div>
    <div class="flex justify-center pb-4 px-4">
        <h2 class="text-lg pb-4">Add steps for task</h2>
        <span wire:click="increment" class="fas fa-plus px-2 py-1 cursor-pointer"/>
    </div>
    @foreach ($steps as $step)
        <div class="flex justify-center py-2">
            <input type="text" name="step[]" class="py-2 px-2 border rounded" placeholder="Description Step {{ $step }}">
            <span class="fas fa-times text-red-400 p-3" wire:click="remove({{$loop->index}})" />
        </div>
    @endforeach



    {{--  {{ $steps }}  --}}
</div>
