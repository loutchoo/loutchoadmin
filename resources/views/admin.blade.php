<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loutchoadmin - Admin</title>
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
    <header class="container mx-auto px-4 py-6 flex items-center justify-between">
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
    <div>
      <h1 class="font-semibold text-5xl text-center mt-10">Profile :</h1>
      <h1 class="font-semibold text-2xl text-center mt-4">Username : {{$user['name']}}</h1>
    </div>
    <div class="flex justify-center">
      <div class="inline-block">
      <h1 class="block mt-8 text-center">Change password :</h1>
      <form action="{{route('admin')}}" method="POST">
        @csrf
        <input class="p-2 border-2 border-black rounded-lg block mt-2 text-black" type="password" placeholder="New password" name="newpassword">
        <input class="p-2 border-2 border-black rounded-lg block mt-4 text-black" type="password" placeholder="New password" name="newpassword2">
        <div class="flex justify-center mt-2">
        <button type="submit" class="p-2 rounded-lg bg-black text-white font-semibold block">Change</button>
        </div>
      </div>
      </form>
    </div>
    <div>
      @if(session('status'))
        <h1 class="text-center font-semibold block">{{session('status')}}</h1>
        @elseif (session('error'))
        <h1 class="text-center font-semibold block">{{session('error')}}</h1>
        @endif
    </div>
</body>
</html>