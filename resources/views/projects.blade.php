<!DOCTYPE html>
<html lang="fr">

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

<body class="bgcolor text-white sm:text-lg">
    <header class="container mx-auto px-4 py-6 sm:flex sm:items-center sm:justify-between  ">
        <div class="flex justify-center">
          <a href="/">
          <img class="rounded-lg border-2 border-green-600" src="{{asset('images/ohnocringe.jpeg')}}" height="50" width="50" alt=""></a>
            <a href="/" class="font-bold text-white text-sm sm:text-xl mt-4 sm:mt-2 ml-2">LoutchoDev</a>
          </div>
          <nav class="mt-2 sm:mt-0">
            <ul class="flex items-center justify-center font-semibold mx-10">
              <li class="relative sm:px-3 px-2 py-2">
                <a href="/home">
                <div class="bg-white rounded-full border-2 border-white text-white p-2 sm:p-3 bg-opacity-5 hover:border-green-400">
                  <span class="hover:opacity-50 hover:text-green-400">Home</span>
                </div>
              </a>
              </li>
              <li class="relative sm:px-3 px-2 py-2">
                <a href="/todolist">
                  <div class="bg-white rounded-full border-2 border-white text-white p-2 sm:p-3 bg-opacity-5 hover:border-green-400">
                    <span class="hover:opacity-50 hover:text-green-400">Todolist</span>
                </div>
                </a>
              </li>
              <li class="relative sm:px-3 px-2 py-2">
                <a href="/projects">
                <div class="bg-white rounded-full border-2 border-white text-white p-2 sm:p-3 bg-opacity-5 hover:border-green-400">
                  <span class="hover:opacity-50 hover:text-green-400">Projects</span>
                </div>
              </a>
              </li>
              <li class="relative sm:px-3 px-2 py-2">
                <a href="/about">
                <div class="bg-white rounded-full border-2 border-white text-white p-2 sm:p-3 bg-opacity-5 hover:border-green-400">
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
                <a class="rounded-full px-3 py-2 bg-white font-semibold sm:flex items-center group" href="/logout">
                  <span class="text-red-600">Logout</span></a>
                </div>
                @else
                <div class="flex justify-center">
                <a class="rounded-full px-3 py-2 bg-white font-semibold sm:flex items-center group" href="/login">
                <span class="text-black">Sign in</span></a>
              </div>
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
            <div class="sm:flex sm:justify-between mt-1">
                <div class="sm:border-4 border-y-2 border-green-400 sm:rounded-lg mt-4 p-4">
                    <div class="flex justify-center">
                        <h1 class="text-2xl font-semibold text-center mt-2 hover:text-green-400">FaceitEloDoge</h1>
                        <a class="ml-1" href="https://github.com/loutchoo/FaceitEloDoge">
                            <img class="" src="{{ asset('images/github.png') }}" height="50" width="50"
                                alt="">
                        </a>
                    </div>
                    <div class="flex justify-between font-semibold">
                        <div class="">
                            <h1 class="hover:text-gray-300">Technology : Web</h1>
                            <div class="flex justify-center mt-1">
                                <img class="" src="{{ asset('images/web2.png') }}" height="50" width="50"
                                    alt="">
                            </div>
                        </div>
                        <div class="ml-2">
                            <h1 class="hover:text-blue-400">Language : PHP</h1>
                            <div class="flex justify-center mt-2">
                                <img class="" src="{{ asset('images/php.webp') }}" height="50" width="50"
                                    alt="">
                            </div>
                        </div>
                        <div class="ml-2">
                            <h1 class="hover:text-red-500">Framework : Laravel</h1>
                            <div class="flex justify-center">
                                <img class="" src="{{ asset('images/laravel.png') }}" height="50"
                                    width="50" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center">
                    <img class="mt-2 rounded-lg border border-black"
                        src="{{asset('images/faceitelo2.png')}}"
                        height="500" width="500" alt="">
                    </div>
                </div>

                

                <div class="sm:border-4 border-b-2 border-green-400 sm:rounded-lg mt-4 p-4 sm:ml-10">
                    <div class="flex justify-center">
                        <h1 class="text-2xl font-semibold text-center mt-2 hover:text-green-400">Evilscreen</h1>
                        <a class="ml-1" href="https://github.com/loutchoo/evilscreen">
                            <img class="" src="{{ asset('images/github.png') }}" height="50" width="50"
                                alt="">
                        </a>
                    </div>
                    <div class="flex justify-between font-semibold">
                        <div>
                            <h1 class="hover:text-gray-300">Technology : Software</h1>
                            <div class="flex justify-center">
                                <img class="" src="{{ asset('images/software.png') }}" height="50" width="50"
                                    alt="">
                            </div>
                        </div>
                        <div class="ml-4">
                            <h1 class="hover:text-yellow-300">Language : Python</h1>
                            <div class="flex justify-center mt-1">
                                <img class="" src="{{ asset('images/python.png') }}" height="50" width="50"
                                    alt="">
                            </div>
                        </div>
                        <div class="ml-4">
                            <h1 class="hover:text-orange-600">Package : Tkinter</h1>
                            <div class="flex justify-center mt-1">
                                <img class="" src="{{ asset('images/tkinter.png') }}" height="25"
                                    width="25" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center">
                    <img class="mt-2 rounded-lg border border-black"
                        src="{{asset('images/evilscreen.png')}}"
                        height="500" width="500" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sm:pb-0 pb-10"></div>
    
</body>

</html>
