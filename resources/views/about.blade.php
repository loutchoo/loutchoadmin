<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loutchoadmin - About</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<style>
  .textcolor{
    color: #00EAB1;
  }
  .bgcolor{
    background-color: #182235;
  }
</style>

<body class="bgcolor text-white text-lg">
    <header class="container mx-auto px-4 py-6 flex items-center justify-between  ">
        <a href="/" class="font-bold text-white text-xl">LoutchoAdmin</a>
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
                <span class="text-black">Logout</span></a>
              @else
              <a class="rounded-full px-3 py-2 bg-white font-semibold flex items-center group" href="/login">
              <span class="text-black">Sign in</span></a>
              @endif
            </li>
          </ul>
        </nav>
    </header>
    <div class="w-full flex justify-center">
        <div class="flex justify-center w-5/12">
            <div class="mt-14">
                <div class="">
                    <h1 class="textcolor text-5xl font-bold text-center">About me :</h1>
                    <div class="inline-block">
                        <h1 class="font-semibold mt-4 text-center">I'm a young optimistic developper as you already know and i wanted to create a website that i could use for both a Portfolio and a Todolist for my next projects.</h1>
                        <h1 class="font-semibold mt-2 text-center">This website will be updated as long as i'm in web developpement.</h1>
                        <h1 class="font-semibold mt-2 text-center">Get the code of this website here :</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>