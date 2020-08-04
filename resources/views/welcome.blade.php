@extends('layouts.app')

@section('content')
    <header class="px-12 py-8">
        <div class="container flex justify-between items-center">
            <div class="w-1/6">
                <img class="h-24 w-24 rounded-full" src="https://avatars1.githubusercontent.com/u/3590383?v=4"
                     alt="Robb Fountain">
            </div>
            <nav class="flex-1 pb-6 border-b flex justify-between items-center">
                <ul class="flex">
                    <li class="mr-6">
                        <a href="#"
                           class="text-sm text-gray-700 rounded-md px-3 py-2 bg-transparent hover:bg-gray-100 hover:text-gray-900 transition ease-in-out duration-300 focus:bg-gray-300">Home
                            Lab</a>
                    </li>
                    <li>
                        <a href="#"
                           class="text-sm text-gray-700 rounded-md px-3 py-2 bg-transparent hover:bg-gray-100 hover:text-gray-900 transition ease-in-out duration-300 focus:bg-gray-300">
                            AWS
                        </a>
                    </li>
                </ul>
                <div>
                    <a href="https://twitter.com/rfountain207"
                       class="text-gray-600 hover:text-gray-800 transition ease-in-out duration-300">
                        <i class="fab fa-twitter fa-lg"></i>
                    </a>

                    <a href="https://github.com/robbfountain"
                       class="ml-3 text-gray-600 hover:text-gray-800 transition ease-in-out duration-300">
                        <i class="fab fa-github fa-lg"></i>
                    </a>
                </div>
            </nav>
        </div>
    </header>

    <section class="prose lg:prose-lg lg:pl-64 max-w-5xl">
        <h2>{{$content->title}}</h2>

        {!! $content->content !!}
    </section>
@endsection
