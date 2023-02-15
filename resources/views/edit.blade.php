<head>
    @vite(['resources/css/app.css', 'resources/scss/main.scss', 'resources/js/app.js'])
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="w-full h-fit p-10 rounded-md shadow-2xl">
        <div class="items-center border-b-2 content-center drop-shadow-sm mb-5 ">
            {{-- <p class="text-large items-center font-bold my-auto">Todo List</p> --}}

            <a href="/" class="text-large items-center font-bold my-auto text-gray-900 decoration-non">
                <span class="material-symbols-outlined no-underline">
                    arrow_back_ios
                </span>Todo List</a>

        </div>

        <div class="flex shadow justify-between items-center rounded-md p-2 border ">
            <form action="/todos/{{ $todo->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="flex flex-col  justify-x-between ">
                    <label for="inputLabel" class="text-medium font-semibold">Title:</label>
                    <input type="text" name="title" id="inputLabel" class="outline-none pl-2" value="{{ $todo->title }}">
                    <label for="textareLabel" class="text-medium font-semibold">Content:</label>
                    <textarea id="textareLabel" name="content" class="outline-none w-full pl-2" cols="300" rows="10">{{ $todo->content }}</textarea>
                </div>
                <div class="flex justify-end px-3">
                    <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Done!</button>
                </div>
            </form>
        </div>
    </div>


</body>
