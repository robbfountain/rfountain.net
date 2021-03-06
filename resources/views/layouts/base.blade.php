<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @yield('meta')

        <title>{{ config('app.name') }}</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('favicon.ico')}}">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

        <!-- Icons -->
        <script src="https://kit.fontawesome.com/6f474d04f0.js" crossorigin="anonymous"></script>

        <!-- Hilight JS -->
        <link rel="stylesheet"
              href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.2/styles/solarized-dark.min.css">
        <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.2/highlight.min.js"></script>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset(mix('css/app.css')) }}">
        @livewireStyles

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-92542735-8"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }

            gtag('js', new Date());

            gtag('config', 'UA-92542735-8');
        </script>

    </head>

    <body class="antialiased bg-white dark:bg-gray-900 relative">
        <nav class="fixed bg-white dark:bg-gray-900 shadow w-full top-0 mb-8"
             x-data="{mobileMenu : false}">
            <div class="max-w-7xl mx-auto px-2 sm:px-4 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex px-2 lg:px-0">
                        <div class="flex-shrink-0 flex items-center" x-data="{avatar:false}">
                            <img class="h-12 w-12 rounded-full cursor-pointer"
                                 src="https://avatars1.githubusercontent.com/u/3590383?v=4"
                                 alt="Robb Fountain"
                                 @click="avatar=true"
                                 @click.away="avatar=false">
                            <a href="{{route('home')}}"
                               class="hidden lg:inline ml-3 text-gray-500 dark:text-gray-100 hover:text-gray-700 dark:hover:text-gray-300 text-sm font-medium leading-5 transition duration-300 ease-in-out">
                                Robb Fountain
                            </a>

                            <div x-show="avatar"
                                 class="fixed bottom-0 inset-x-0 px-4 pb-6 sm:inset-0 sm:p-0 sm:flex sm:items-center sm:justify-center"
                                 x-cloak>

                                <div class="fixed inset-0 transition-opacity"
                                     x-show="avatar"
                                     x-cloak
                                     x-transition:enter="transition ease-out duration-300"
                                     x-transition:enter-start="opacity-0 "
                                     x-transition:enter-end="opacity-100"
                                     x-transition:leave="transition ease-in duration-200"
                                     x-transition:leave-start="opacity-100 "
                                     x-transition:leave-end="opacity-0">
                                    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                                </div>

                                <div x-show="avatar"
                                    x-cloak
                                    x-transition:enter="transition ease-out duration-300"
                                    x-transition:enter-start="opacity-0 transforn translate-y-4 sm:translate-y-0 sm:scale-95"
                                    x-transition:enter-end="opacity-100 transform translate-y-0 sm:scale-100"
                                    x-transition:leave="transition ease-in duration-200"
                                    x-transition:leave-start="opacity-100 transform opacity-100 translate-y-0 sm:scale-100"
                                    x-transition:leave-end="opacity-0 transform opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                    class="rounded-lg px-4 pt-5 pb-4 overflow-hidden transform transition-all sm:max-w-sm sm:w-full sm:p-6"
                                    role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                                    <div class="text-right">
                                        <i class="far fa-times fa-2x text-gray-700 hover:text-gray-900 transition ease-in-out duration-300 cursor:pointer opacity-75"
                                           @click="avatar=false"></i>
                                    </div>

                                    <img class="rounded-full"
                                         src="https://avatars1.githubusercontent.com/u/3590383?v=4"
                                         alt="Robb Fountain">
                                </div>
                            </div>
                        </div>
                        <div class="hidden lg:ml-6 lg:flex">
                            <x-nav-link route="blog">Blog</x-nav-link>
                            @foreach(\Wink\WinkPage::all() as $page)
                                <x-nav-link :asPage=true
                                            route="{{$page->slug}}">
                                    {{$page->title}}
                                </x-nav-link>
                            @endforeach
                        </div>
                    </div>
                    <div class="relative flex-1 flex items-center justify-center px-2 lg:ml-6 lg:justify-end">
                        <livewire:search-blogs/>
                    </div>
                    <div class="flex items-center lg:hidden">
                        <!-- Mobile menu button -->
                        <button @click="mobileMenu=!mobileMenu"
                                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
                                aria-label="Main menu" aria-expanded="false">
                            <svg x-show="!mobileMenu"
                                 class="block h-6 w-6" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M4 6h16M4 12h16M4 18h16"/>
                            </svg>
                            <svg x-show="mobileMenu" class="block h-6 w-6" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                    <div class="hidden lg:ml-4 lg:flex lg:items-center">
                        <a href="https://twitter.com/rfountain207"
                           target="_blank"
                           class="ml-3 text-gray-600 dark:text-gray-100 hover:text-gray-800 dark:hover:text-gray-300 transition ease-in-out duration-300">
                            <i class="fab fa-twitter fa-lg"></i>
                        </a>
                        <a href="https://github.com/robbfountain"
                           target="_blank"
                           class="ml-3 text-gray-600 dark:text-gray-100 hover:text-gray-800 dark:hover:text-gray-300 transition ease-in-out duration-300">
                            <i class="fab fa-github fa-lg"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div x-show="mobileMenu"
                 class="block lg:hidden bg-white dark:bg-gray-900"
                 x-cloak>
                <div class="pt-2 pb-3">
                    <a href="{{route('blog')}}"
                       class="mt-1 block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 dark:text-gray-100 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out">
                        Blog
                    </a>
                    @foreach(\Wink\WinkPage::all() as $page)
                        <a href="{{route('page.show',$page->slug)}}"
                           class="mt-1 block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 dark:text-gray-100 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out">
                            {{$page->title}}
                        </a>
                    @endforeach
                </div>
            </div>
        </nav>

        @yield('body')

        <script src="{{ asset(mix('js/app.js')) }}"></script>
        @livewireScripts

        <script>
            // KeyUp Function
            function docKeyUp(e) {
                if (e.keyCode == 191) {
                    document.getElementById('search').focus();
                }
            }

            // Search Shortcut
            document.addEventListener('keyup', docKeyUp, false);

            // Initialize Hilight JS
            hljs.initHighlightingOnLoad();
        </script>
    </body>
</html>
