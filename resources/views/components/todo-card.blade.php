@props(['todo'])

<div
    class="flex  shadow justify-between items-center rounded-md p-2 border {{ $todo->is_done == 0 ? 'border-2' : 'bg-orange-300 text-neutral-900' }} ">
    <div class="flex">
        <div class=" flex items-center p-2">
            <form action="/todos/{{ $todo->id }}" method="POST">
                @csrf
                @method('PUT')
                {{-- <input class="" type="checkbox"> --}}
                <button type="submit" class="rounded-full text-large hover:text-blue-400 hover:scale-150">●</button>
            </form>

        </div>

        <div class="font-semibold">
            <label for="checkcheckbox" class="select-none">{{ $todo->title }} <span
                    class="block text-small font-normal">{{ $todo->content }}
                </span>
            </label>

        </div>


    </div>
    {{-- button --}}
    <div class="w-auto">
        <div class="btn-group  ">
            <form action="/todos/{{ $todo->id }}" method="POST">
                @csrf
                @method('PUT')
                <button class="btn btn-outline-secondary btn-sm w-28 " type="submit">
                    Mark As Done
                </button>
            </form>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle dropdown-toggle-split"
                data-bs-toggle="dropdown" aria-expanded="false">
                <span class="visually-hidden">Toggle Dropdown</span>
            </button>
            <ul class="dropdown-menu">
                <form action="/todos/{{ $todo->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" name="todo_delete" class="h-full w-full">Delete</button>
                </form>

                <form action="/todos/{{ $todo->id }}/edit" method="GET">
                    @csrf
                    <button type="submit" name="todo_edit" class="h-full w-full">Edit</button>
                </form>

            </ul>
        </div>
    </div>
</div>
