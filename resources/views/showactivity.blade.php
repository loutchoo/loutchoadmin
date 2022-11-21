<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loutchoadmin - Activity</title>
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

    .under {
        text-decoration: underline;
    }
</style>

<body class="bgcolor text-white text-lg">
    <header class="container mx-auto px-4 py-6 flex items-center justify-between  ">
        <div class="flex">
            <a href="/">
                <img class="rounded-lg border-2 border-green-600" src="{{ asset('images/ohnocringe.jpeg') }}"
                    height="50" width="50" alt=""></a>
            <a href="/" class="font-bold text-white text-xl mt-2 ml-2">LoutchoDev</a>
        </div>
        <nav>
            <ul class="flex items-center justify-center font-semibold mx-10">
                <li class="relative px-3 py-2">
                    <a href="/home">
                        <div class="bg-white rounded-full border-2 border-white text-white p-3 bg-opacity-5 hover:border-green-400">
                            <span class="hover:opacity-50 hover:text-green-400">Home</span>
                        </div>
                    </a>
                </li>
                <li class="relative px-3 py-2">
                    <a href="/todolist">
                        <div class="bg-white rounded-full border-2 border-white text-white p-3 bg-opacity-5 hover:border-green-400">
                            <span class="hover:opacity-50 hover:text-green-400">Todolist</span>
                        </div>
                    </a>
                </li>
                <li class="relative px-3 py-2">
                    <a href="/projects">
                        <div class="bg-white rounded-full border-2 border-white text-white p-3 bg-opacity-5 hover:border-green-400">
                            <span class="hover:opacity-50 hover:text-green-400">Projects</span>
                        </div>
                    </a>
                </li>
                <li class="relative px-3 py-2">
                    <a href="/about">
                        <div class="bg-white rounded-full border-2 border-white text-white p-3 bg-opacity-5 hover:border-green-400">
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
    <div>
        <h1 class="text-center font-semibold text-4xl mt-8 textcolor">Here is one of your activities :</h1>
    </div>

    <div class="w-full flex justify-center mt-6">
        <div class="w-9/12 border-4 border-white rounded-lg text-xl">
            <div>
                <h1 class="font-semibold mt-4 ml-6 textcolor">Activity of Loutcho_Q</h1>
                <h1 class="font-semibold mt-1 ml-6 text-red-600">Date of creation : {{ $activity->created_at }}</h1>
                <div class="flex justify-center">
                    <h1 class="font-semibold text-3xl mt-8">Title of the activity : </h1>
                    <h1 class="mt-8 text-3xl font-semibold ml-1 under"> {{ $activity->title }}</h1>
                </div>
            </div>
            <div>
              <h1 class="font-semibold text-3xl mt-8 ml-10">Description :</h1>
              <h1 class="mx-20 font-lg mt-4 text-xl">{{$activity->description}}.</h1>
            </div>
            <div class="pb-80"></div>
        </div>
    </div>
</body>

</html>
