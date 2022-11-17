<!DOCTYPE html>
<html lang="fr  ">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loutchoadmin - Login</title>
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

    .bordercolor {
        border-color: #00EAB1;
        ;
    }
</style>

<body class="bgcolor text-white sm:text-lg">
    <header class="container mx-auto px-4 py-6 sm:flex sm:items-center sm:justify-between  ">
        <div class="flex justify-center">
          <a href="/">
          <img class="rounded-lg border-2 border-green-600" src="{{asset('images/ohnocringe.jpeg')}}" height="50" width="50" alt=""></a>
            <a href="/" class="font-bold text-white text-sm sm:text-xl mt-4 sm:mt-2 ml-2">LoutchoAdmin</a>
          </div>
          <nav class="mt-2 sm:mt-0">
            <ul class="flex items-center justify-center font-semibold mx-10">
              <li class="relative px-3 py-2">
                <a href="/home">
                <div class="bg-white rounded-full text-white p-2 sm:p-3 bg-opacity-5">
                  <span class="hover:opacity-50 cursor-default">Home</span>
                </div>
              </a>
              </li>
              <li class="relative px-3 py-2">
                <a href="/todolist">
                  <div class="bg-white rounded-full text-white p-2 sm:p-3 bg-opacity-5">
                    <span class="hover:opacity-50 cursor-default">Todolist</span>
                </div>
                </a>
              </li>
              <li class="relative px-3 py-2">
                <a href="/projects">
                <div class="bg-white rounded-full text-white p-2 sm:p-3 bg-opacity-5">
                  <span class="hover:opacity-50 cursor-default">Projects</span>
                </div>
              </a>
              </li>
              <li class="relative px-3 py-2">
                <a href="/about">
                <div class="bg-white rounded-full text-white p-2 sm:p-3 bg-opacity-5">
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
                <div class="flex justify-center">
                <a class="rounded-full px-3 py-2 bg-white font-semibold sm:flex items-center group" href="/logout">
                  <span class="text-black">Logout</span></a>
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
    <div class="sm:mt-14 mt-4 flex justify-center animate__animated animate__bounceInDown">
        <div class="w-1/3">
            <div class="bgcolor sm:border-4 sm:bordercolor flex justify-center rounded-lg">
                <div class="inline-block mt-8">
                    <div class="mt-4">
                        <h1 class="font-bold text-5xl text-center sm:textcolor">Sign in</h1>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <input
                                class="block border-4 border-black bg-white rounded-lg p-2 font-semibold mt-8 text-black"
                                type="text" placeholder="Username" name="username">
                            <input
                                class="block border-4 border-black bg-white mt-6 rounded-lg p-2 font-semibold text-black"
                                type="password" placeholder="Password" name="password">
                        <div class="flex justify-center">
                            <button
                                type="submit" class="block bg-white text-black font-semibold border-black border-4 rounded-full p-3 sm:p-2 px-4 mt-6 hover:opacity-75">Login</button>
                            </form>
                        </div>
                        <div class="mb-14"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
