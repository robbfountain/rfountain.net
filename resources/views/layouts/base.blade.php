 <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @hasSection('title')
            <title>@yield('title') - {{ config('app.name') }}</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif

        <!-- Favicon -->
		<link rel="shortcut icon" href="{{ asset('favicon.ico')}}">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

        <!-- Icons -->
        <script src="https://kit.fontawesome.com/6f474d04f0.js" crossorigin="anonymous"></script>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @livewireStyles

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body class="antialiased bg-white dark:bg-gray-900">

        <nav class="bg-white dark:bg-gray-900 shadow" x-data="{mobileMenu : false}">
            <div class="max-w-7xl mx-auto px-2 sm:px-4 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex px-2 lg:px-0">
                        <div class="flex-shrink-0 flex items-center">
                            <img class="h-12 w-12 rounded-full" src="https://avatars1.githubusercontent.com/u/3590383?v=4"
                                 alt="Robb Fountain">
                            <span class="ml-3 text-gray-500 dark:text-gray-100 text-sm font-medium leading-5">
                                Robb Fountain
                            </span>
                        </div>
                        <div class="hidden lg:ml-6 lg:flex">
                            <x-nav-link route="home">Home</x-nav-link>
                            <x-nav-link route="blog">Blog</x-nav-link>
                            <x-nav-link route="home-lab">Home Lab</x-nav-link>
                        </div>
                    </div>
                    <div class="relative flex-1 flex items-center justify-center px-2 lg:ml-6 lg:justify-end">
                        <livewire:search-blogs />
                    </div>
                    <div class="flex items-center lg:hidden">
                        <!-- Mobile menu button -->
                        <button @click="mobileMenu=!mobileMenu" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out" aria-label="Main menu" aria-expanded="false">
                            <!-- Icon when menu is closed. -->
                            <!-- Menu open: "hidden", Menu closed: "block" -->
                            <svg x-show="!mobileMenu" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                            <!-- Icon when menu is open. -->
                            <!-- Menu open: "block", Menu closed: "hidden" -->
                            <svg x-show="mobileMenu" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="hidden lg:ml-4 lg:flex lg:items-center">
                        <a href="" class="ml-3 text-gray-600 hover:text-gray-800 transition ease-in-out duration-300">
                            <i class="fab fa-twitter fa-lg"></i>
                        </a>
                        <a href="" class="ml-3 text-gray-600 hover:text-gray-800 transition ease-in-out duration-300">
                            <i class="fab fa-github fa-lg"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div x-show="mobileMenu" class="block lg:hidden">
                <div class="pt-2 pb-3">
                    <a href="{{route('home-lab')}}" class="block pl-3 pr-4 py-2 border-l-4 border-indigo-500 text-base font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition duration-150 ease-in-out">Dashboard</a>
                    <a href="{{route('blog')}}" class="mt-1 block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out">Team</a>
                </div>
            </div>
        </nav>

        @yield('body')

        <script src="{{ asset('js/app.js') }}"></script>
        @livewireScripts
    </body>
</html>
