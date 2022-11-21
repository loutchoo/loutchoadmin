<!DOCTYPE html>
<html lang="fr  ">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loutchoadmin - Todolist</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>
<style>
    .textcolor {
        color: #00EAB1;
    }

    .bgcolor {
        background-color: #182235;
    }
</style>

<body class="bgcolor text-white sm:text-lg">
    <header class="container mx-auto px-4 py-6 sm:flex sm:items-center sm:justify-between  ">
        <div class="flex justify-center">
            <a href="/">
                <img class="rounded-lg border-2 border-green-600" src="{{ asset('images/ohnocringe.jpeg') }}"
                    height="50" width="50" alt=""></a>
            <a href="/" class="font-bold text-white text-lg sm:text-xl mt-3 sm:mt-2 ml-2">LoutchoDev</a>
        </div>
        <nav class="mt-2 sm:mt-0">
            <ul class="flex items-center justify-center font-semibold mx-10">
                <li class="relative sm:px-3 px-2 py-2">
                    <a href="/home">
                        <div class="bg-white rounded-full border-2 border-white text-white p-2 sm:p-3 bg-opacity-5">
                            <span class="hover:opacity-50 hover:text-green-400">Home</span>
                        </div>
                    </a>
                </li>
                <li class="relative sm:px-3 px-2 py-2">
                    <a href="/todolist">
                        <div class="bg-white rounded-full border-2 border-white text-white p-2 sm:p-3 bg-opacity-5">
                            <span class="hover:opacity-50 hover:text-green-400">Todolist</span>
                        </div>
                    </a>
                </li>
                <li class="relative sm:px-3 px-2 py-2">
                    <a href="/projects">
                        <div class="bg-white rounded-full border-2 border-white text-white p-2 sm:p-3 bg-opacity-5">
                            <span class="hover:opacity-50 hover:text-green-400">Projects</span>
                        </div>
                    </a>
                </li>
                <li class="relative sm:px-3 px-2 py-2">
                    <a href="/about">
                        <div
                            class="bg-white rounded-full border-2 border-white text-white p-2 sm:p-3 bg-opacity-5 cursor-defaul">
                            <span class="hover:opacity-50 hover:text-green-400">About</span>
                        </div>
                    </a>
                </li>
            </ul>
        </nav>
        <nav>
            <ul>
                <li>
                    @if (Auth::check())
                        <div class="flex justify-center">
                            <a class="rounded-full px-3 py-2 bg-white font-semibold sm:flex items-center group"
                                href="/logout">
                                <span class="text-red-600">Logout</span></a>
                        </div>
                    @else
                        <div class="flex justify-center">
                            <a class="rounded-full px-3 py-2 bg-white font-semibold sm:flex items-center group"
                                href="/login">
                                <span class="text-black">Sign in</span></a>
                        </div>
                    @endif
                </li>
            </ul>
        </nav>
    </header>
    <div class="mt-20">
        <h1 class="text-center">You need to have the permissions to see the Todolist.</h1>
    </div>
</body>

</html>
