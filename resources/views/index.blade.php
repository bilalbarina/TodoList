<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Todo List </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    @vite('resources\css\app.css')
</head>

<body>
    <div class="container py-16 max-w-3xl px-4 md:px-0">
        <div class="w-full flex justify-end">
                <button class="py-2 px-4 bg-primary rounded-md text-white text-xs font-semibold uppercase"
                onClick="document.getElementById('new-task-form').classList.remove('hidden')">
                    Create task
                </button>
        </div>
        @if ($errors->has('*'))
        <div class="bg-red-600 text-white w-full p-2 text-center rounded-md mt-4">
            {{ $errors->first() }}
        </div>
    @endif
        <div id="new-task-form" class="hidden">
            <form action="{{ route('task') }}" method="post" class="flex flex-col space-y-2 mt-4">
                @csrf
                <input type="text" name="" class="rounded-md border-1 border-slate-200" placeholder="Title">
                <textarea name="" id="" rows="3" class="rounded-md border-1 border-slate-200" placeholder="Description"></textarea>
                <input type="date" name="" class="rounded-md border-1 border-slate-200" placeholder="Due date" value="{{ $currentDate }}">
                <input type="text" name="" class="rounded-md border-1 border-slate-200" placeholder="Category">
                <button type="submit" class="py-2 px-4 bg-primary rounded-md text-white text-xs font-semibold uppercase w-24">
                    Add
                </button>
            </form>
        </div>

        <div class="space-y-8 mt-4">
            <ul class="space-y-0.5">
                <div class="inline-flex items-center space-x-2">
                    <div class="text-xl font-bold mb-2">
                        Personal
                    </div>
                    <span class="text-slate-400 text-base font-semibold pb-2"> 4 </span>
                </div>
                @foreach ([1, 2, 3, 4] as $key)
                    <li class="cursor-pointer">
                        <div class="bg-white border border-slate-200 rounded-md px-4 py-2">
                            <div class="flex justify-between items-center text-sm px-4">
                                <div class="inline-flex items-center space-x-2">
                                    <span>
                                        Daily routine
                                    </span>
                                    <div class="bg-green-200 text-green-500 rounded-md px-2 p-1 text-xs font-semibold">
                                        Today
                                    </div>
                                </div>
                                <div class="flex justify-center items-center space-x-3">
                                    <button>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-primary">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>
                                    </button>
                                    <button>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-red-600">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach

            </ul>
            <ul class="space-y-0.5">
                <div class="inline-flex items-center space-x-2">
                    <div class="text-xl font-bold mb-2">
                        Work
                    </div>
                    <span class="text-slate-400 text-base font-semibold pb-2"> 2 </span>
                </div>
                @foreach ([1, 2] as $key)
                    <li class="cursor-pointer">
                        <div class="bg-white border border-slate-200 rounded-md px-4 py-2">
                            <div class="flex justify-between items-center text-sm px-4">
                                <div class="inline-flex items-center space-x-2">
                                    <span>
                                        Daily routine
                                    </span>
                                    <div class="bg-green-200 text-green-500 rounded-md px-2 p-1 text-xs font-semibold">
                                        Today
                                    </div>
                                </div>
                                <div class="flex justify-center items-center space-x-3">
                                    <button>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-primary">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>
                                    </button>
                                    <button>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-red-600">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach

            </ul>
        </div>
    </div>
</body>

</html>
