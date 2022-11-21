<!DOCTYPE html>
<html lang="fr  ">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loutchoadmin - Create an activity</title>
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

    ::placeholder {
        color: red;
    }
</style>

<body class="bgcolor text-white text-lg">
    <header class="container mx-auto px-4 py-6 flex items-center justify-between  ">
        <div class="flex">
            <a href="/">
                <img class="rounded-lg border-2 border-green-600" src="{{ asset('images/ohnocringe.jpeg') }}"
                    height="50" width="50" alt=""></a>
            <a href="/" class="font-bold text-white text-lg sm:text-xl mt-2 ml-2">LoutchoDev</a>
        </div>
        <nav>
            <ul class="flex items-center justify-center font-semibold mx-10">
                <li class="relative sm:px-3 px-2 py-2">
                    <a href="/home">
                        <div class="bg-white rounded-full border-2 border-white text-white p-3 bg-opacity-5 hover:border-green-400">
                            <span class="hover:opacity-50 hover:text-green-400">Home</span>
                        </div>
                    </a>
                </li>
                <li class="relative sm:px-3 px-2 py-2">
                    <a href="/todolist">
                        <div class="bg-white rounded-full border-2 border-white text-white p-3 bg-opacity-5 hover:border-green-400">
                            <span class="hover:opacity-50 hover:text-green-400">Todolist</span>
                        </div>
                    </a>
                </li>
                <li class="relative sm:px-3 px-2 py-2">
                    <a href="/projects">
                        <div class="bg-white rounded-full border-2 border-white text-white p-3 bg-opacity-5 hover:border-green-400">
                            <span class="hover:opacity-50 hover:text-green-400">Projects</span>
                        </div>
                    </a>
                </li>
                <li class="relative sm:px-3 px-2 py-2">
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
    <h1 class="text-4xl font-semibold text-center mt-2 animate__animated animate__bounceInDown">Create an activity for your Todolist :</h1>
    <div class="flex justify-center mt-4 animate__animated animate__bounceInDown">
        <div>
            <div class="inline-block">
                <form action="" method="POST">
                    @csrf
                <label class="block font-semibold" for="pet-select">Choose a language :</label>
                <select class="text-black" name="language" id="language">
                    <option class="text-black" value="">--Please choose a language--</option>
                    <option value="Laravel">Laravel</option>
                    <option value="Javascript">Javascript</option>
                    <option value="Python">Python</option>
                </select>
                <div class="flex justify-center mt-4">
                    <div class="inline-block">
                        <label class="text-white font-semibold" for="title">Title :</label>
                        <input name="title" class="block rounded-lg text-black px-2" type="text" size="25"
                            placeholder="Name of the future activity">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center mt-4 animate__animated animate__bounceInDown">
        <div class="inline-block">
            <label class="text-white font-semibold" for="description">Description :</label>
            <textarea rows="9" cols="40" name="description" class="block rounded-md text-black px-2 pt-1" type="text"
                placeholder="Description of the activity"></textarea>
            <div class="flex justify-center mt-8">
                <button type="submit" class="p-2 bg-green-600 border-green-700 border-4 rounded-md hover:opacity-75">Add to ToDoList</button>
            </form>
            </div>
            <div>
                @if(session('success'))
                  <h1 class="text-center font-semibold block mt-2">{{session('success')}}</h1>
                  @endif
              </div>
        </div>
    </div>
</body>

</html>
