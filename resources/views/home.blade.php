<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loutchoadmin - Home</title>
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
                        <div
                            class="bg-white rounded-full border-2 border-green-400 text-white p-2 sm:p-3 bg-opacity-5 hover:border-green-400">
                            <span class="hover:opacity-50 hover:text-green-400 text-green-400">Home</span>
                        </div>
                    </a>
                </li>
                <li class="relative sm:px-3 px-2 py-2">
                    <a href="/todolist">
                        <div
                            class="bg-white rounded-full border-2 border-white text-white p-2 sm:p-3 bg-opacity-5 hover:border-green-400">
                            <span class="hover:opacity-50 hover:text-green-400">Todolist</span>
                        </div>
                    </a>
                </li>
                <li class="relative sm:px-3 px-2 py-2">
                    <a href="/projects">
                        <div
                            class="bg-white rounded-full border-2 border-white text-white p-2 sm:p-3 bg-opacity-5 hover:border-green-400">
                            <span class="hover:opacity-50 hover:text-green-400">Projects</span>
                        </div>
                    </a>
                </li>
                <li class="relative sm:px-3 px-2 py-2">
                    <a href="/about">
                        <div
                            class="bg-white rounded-full border-2 border-white text-white p-2 sm:p-3 bg-opacity-5 hover:border-green-400">
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

    <div class="w-full mt-4 sm:mt-20 animate__animated animate__bounceInDown">
        <div class="text-2xl flex-justify-center">
            <h1 class="text-center textcolor font-bold text-4xl sm:text-6xl">Loutcho_Q - Louis</h1>
            <h1 class="text-center font-semibold mt-2 text-3xl">Future developper</h1>
            <div class="sm:mx-96">
                <h1 class="text-center font-semibold mt-2 sm:text-lg mx-10 sm:mx-0">Passionated of creating new stuff, i
                    wanna live a better life with coding, meet people and work on big projects to be the future.</h1>
            </div>
        </div>
        <div class="flex justify-center mt-6">
            <div class="inline-block">
                <div class="flex justify-center">

                    <a href="https://github.com/loutchoo">
                        <img class="" src="{{ asset('images/github.png') }}" height="50" width="50"
                            alt="">
                    </a>
                    <a class="ml-6" href="https://twitter.com/loutchoesport">
                        <img class="" src="{{ asset('images/twitter.png') }}" height="50" width="50"
                            alt="">
                    </a>
                    <div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center mt-6 sm:mt-20">
            <a href="/projects">
                <div class="border-2 border-white rounded-full p-2 hover:border-green-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 13.5L12 21m0 0l-7.5-7.5M12 21V3" />
                    </svg>
            </a>
        </div>
    </div>
    <div class="pb-10"></div>
</body>

</html>
