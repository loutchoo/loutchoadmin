<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loutchoadmin - About</title>
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
            <a href="/" class="font-bold text-white text-sm sm:text-xl mt-4 sm:mt-2 ml-2">LoutchoDev</a>
        </div>
        <nav class="mt-2 sm:mt-0">
            <ul class="flex items-center justify-center font-semibold mx-10">
                <li class="relative sm:px-3 px-2 py-2">
                    <a href="/home">
                        <div
                            class="bg-white rounded-full border-2 border-white text-white p-2 sm:p-3 bg-opacity-5 hover:border-green-400">
                            <span class="hover:opacity-50 hover:text-green-400">Home</span>
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
    <div class="w-full flex justify-center animate__animated animate__bounceInDown">
        <div class="flex justify-center sm:mx-0 mx-4 sm:w-5/12">
            <div class="sm:mt-4 mt-2">
                <div class="">
                    <h1 class="textcolor sm:text-5xl font-bold text-center">About me :</h1>
                    <div class="inline-block">
                        <h1 class="font-semibold mt-4 text-center">I'm a young optimistic developper, making this
                            website to present myself and my work.</h1>
                        <h1 class="font-semibold text-center">The source code of this website will be available in a
                            repository on my Github.</h1>
                        <div class="flex justify-center mt-4">
                            <h1 class="text-xl font-bold">Contact : louis@loutchodev.tk</h1>
                        </div>
                        <div class="flex justify-center mt-4">
                            <a href="https://github.com/loutchoo/loutchoadmin">
                                <div class="flex">
                                    <h1 class="font-semibold mt-3 text-green-300">LoutchoDev - </h1>
                                    <img class="ml-1" src="{{ asset('images/github.png') }}" height="50"
                                        width="50" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="flex justify-center">
                            <img class="rounded-lg border-2 border-green-600 mt-2"
                                src="{{ asset('images/ohnocringe.jpeg') }}" height="100" width="150"
                                alt="">
                        </div>
                        <div class="flex justify-center font-semibold mt-2">
                            <h1 class="text-pink-600">Made with heart & Laravel & Tailwind.</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pb-40"></div>
</body>

</html>
