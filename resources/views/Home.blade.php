<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo List</title>
    @vite(['resources/css/app.css', 'resources/scss/main.scss', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

</head>

<body>
    <div class="w-full h-auto p-10 rounded-md shadow-2xl">
        <div class="flex  items-center border-b-2 content-center drop-shadow-sm mb-5  justify-between">
            <p class="text-large items-center font-bold my-auto">Todo List</p>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-dark mb-2" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop">
                +
            </button>
        </div>
        <div class="space-y-10">

            <div class="space-y-5 flex flex-col justify-center">
                @unless(count($todos) === 0)
                    @foreach ($todos as $todo)
                        @if ($todo->is_done === 0)
                            <x-todo-card :todo="$todo"></x-todo-card>
                        @endif
                    @endforeach
                @else
                    <div class="flex justify-center">

                        <img class="w-96 bg-black" src="/images/image.png" class="bg-orange-900" alt="">
                    </div>
                @endunless
            </div>
            <div>
                <h4>Finished Task</h4>
                <div class="space-y-5">
                    @foreach ($todos as $todo)
                        @if ($todo->is_done === 1)
                            <x-todo-card :todo="$todo"></x-todo-card>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        {{-- <div class="space-y-6">
            <x-todo-card :todos="$todos"></x-todo-card>


        </div> --}}
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Enter New Task!</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/todos/create " method="POST" class="grid grid-flow-row space-y-5">
                        @csrf

                        <input type="text" placeholder="Title" name="title" class="outline-none">
                        <div class="border drop-shadow"></div>
                        <textarea name="content" class="outline-none" placeholder="Input the task here!... " cols="30" rows="10"></textarea>

                        <div class="modal-footer ">
                            <button type="submit" class="btn btn-danger" data-bs-dismiss="toast"
                                data-bs-dismiss="modal">Done!</button>
                        </div>
                        {{-- <button type="button" class="btn-close" data-bs-dismiss="toast" data-bs-target="#my-toast"
                            aria-label="Close">aaaa</button> --}}

                    </form>
                </div>
            </div>
        </div>
    </div>
    <script></script>
</body>

</html>
