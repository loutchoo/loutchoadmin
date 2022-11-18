<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loutchoadmin - Projects</title>
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

<body class="bgcolor text-white text-lg">
    <header class="container mx-auto px-4 py-6 flex items-center justify-between  ">
        <div class="flex">
            <a href="/">
                <img class="rounded-lg border-2 border-green-600" src="{{ asset('images/ohnocringe.jpeg') }}"
                    height="50" width="50" alt=""></a>
            <a href="/" class="font-bold text-white text-xl mt-2 ml-2">LoutchoAdmin</a>
        </div>
        <nav>
            <ul class="flex items-center justify-center font-semibold mx-10">
                <li class="relative px-3 py-2">
                    <a href="/home">
                        <div class="bg-white rounded-full text-white p-3 bg-opacity-5">
                            <span class="hover:opacity-50 cursor-default">Home</span>
                        </div>
                    </a>
                </li>
                <li class="relative px-3 py-2">
                    <a href="/todolist">
                        <div class="bg-white rounded-full text-white p-3 bg-opacity-5">
                            <span class="hover:opacity-50 cursor-default">Todolist</span>
                        </div>
                    </a>
                </li>
                <li class="relative px-3 py-2">
                    <a href="/projects">
                        <div class="bg-white rounded-full text-white p-3 bg-opacity-5">
                            <span class="hover:opacity-50 cursor-default">Projects</span>
                        </div>
                    </a>
                </li>
                <li class="relative px-3 py-2">
                    <a href="/about">
                        <div class="bg-white rounded-full text-white p-3 bg-opacity-5">
                            <span class="hover:opacity-50 cursor-default">About</span>
                        </div>
                    </a>
                </li>
            </ul>
        </nav>
        <nav>
            <ul>
                <li>
                    @if (Auth::check())
                        <a class="rounded-full px-3 py-2 bg-white font-semibold flex items-center group" href="/logout">
                            <span class="text-red-600">Logout</span></a>
                    @else
                        <a class="rounded-full px-3 py-2 bg-white font-semibold flex items-center group" href="/login">
                            <span class="text-black">Sign in</span></a>
                    @endif
                </li>
            </ul>
        </nav>
    </header>
    <div class="flex justify-center">
        <div class="animate__animated animate__bounceInDown">
            <div class="">
                <h1 class="font-semibold text-4xl text-center">Projects :</h1>
            </div>
            <div class="flex justify-between mt-1">
                <div class="border-2 border-gray-300 rounded-lg mt-4 p-4">
                    <div class="flex justify-center">
                        <h1 class="text-2xl font-semibold text-center mt-2">FaceitEloDoge</h1>
                        <a class="ml-1" href="https://github.com/loutchoo/FaceitEloDoge">
                            <img class="" src="{{ asset('images/github.png') }}" height="50" width="50"
                                alt="">
                        </a>
                    </div>
                    <div class="flex justify-between font-semibold">
                        <div class="">
                            <h1>Technology : Web</h1>
                            <div class="flex justify-center mt-1">
                                <img class="" src="{{ asset('images/web2.png') }}" height="50" width="50"
                                    alt="">
                            </div>
                        </div>
                        <div class="ml-2">
                            <h1>Language : PHP</h1>
                            <div class="flex justify-center mt-2">
                                <img class="" src="{{ asset('images/php.webp') }}" height="50" width="50"
                                    alt="">
                            </div>
                        </div>
                        <div class="ml-2">
                            <h1>Framework : Laravel</h1>
                            <div class="flex justify-center">
                                <img class="" src="{{ asset('images/laravel.png') }}" height="50"
                                    width="50" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center">
                    <img class="mt-2"
                        src="{{asset('images/faceitelo2.png')}}"
                        height="500" width="500" alt="">
                    </div>
                </div>

                

                <div class="border-2 border-gray-300 rounded-lg mt-4 p-4 ml-10">
                    <div class="flex justify-center">
                        <h1 class="text-2xl font-semibold text-center mt-2">Evilscreen</h1>
                        <a class="ml-1" href="https://github.com/loutchoo/evilscreen">
                            <img class="" src="{{ asset('images/github.png') }}" height="50" width="50"
                                alt="">
                        </a>
                    </div>
                    <div class="flex justify-between font-semibold">
                        <div>
                            <h1>Technology : Software</h1>
                            <div class="flex justify-center">
                                <img class="" src="{{ asset('images/software.png') }}" height="50" width="50"
                                    alt="">
                            </div>
                        </div>
                        <div class="ml-4">
                            <h1>Language : Python</h1>
                            <div class="flex justify-center mt-1">
                                <img class="" src="{{ asset('images/python.png') }}" height="50" width="50"
                                    alt="">
                            </div>
                        </div>
                        <div class="ml-4">
                            <h1>Package : Tkinter</h1>
                            <div class="flex justify-center mt-1">
                                <img class="" src="{{ asset('images/tkinter.png') }}" height="25"
                                    width="25" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center">
                    <img class="mt-2"
                        src="{{asset('images/evilscreen.png')}}"
                        height="500" width="500" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
