<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loutchoadmin - Home</title>
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
      <div class="flex">
        <a href="/">
        <img class="rounded-lg border-2 border-black" src="{{asset('images/ohnocringe.jpeg')}}" height="50" width="50" alt=""></a>
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
                <span class="text-black">Logout</span></a>
              @else
              <a class="rounded-full px-3 py-2 bg-white font-semibold flex items-center group" href="/login">
              <span class="text-black">Sign in</span></a>
              @endif
            </li>
          </ul>
        </nav>
    </header>
    
    <div class="w-full mt-20 animate__animated animate__bounceInDown">
      <div class="text-2xl flex-justify-center">
        <h1 class="text-center textcolor font-bold text-6xl">Loutcho_Q - Louis</h1>
        <h1 class="text-center font-semibold mt-2 text-4xl">Future developper</h1>
        <div class="mx-96">
          <h1 class="text-center font-semibold mt-2 text-lg">Passionated of creating new stuff, i wanna live a better life with coding, meet people and work on big projects to be the future.</h1>
        </div>
      </div>
      <div class="flex justify-center mt-6">
        <div class="inline-block">
          <div class="flex justify-center">

            <a href="https://github.com/loutchoo">
              <img class="" src="{{asset('images/github.png')}}" height="50" width="50" alt="">
        </a>
        <a class="ml-6" href="https://twitter.com/loutchoesport">
          <img class="" src="{{asset('images/twitter.png')}}" height="50" width="50" alt="">
        </a>
        <div>
        </div>
      </div>
      </div>
    </div>
</body>
</html>