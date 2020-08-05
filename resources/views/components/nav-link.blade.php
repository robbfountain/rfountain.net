<a href="{{route($route)}}"
   class="ml-8 inline-flex items-center px-1 pt-1 border-b-2 {{Request::routeIs($route) ? 'border-indigo-500 text-gray-900' : 'text-gray-500 border-transparent hover:text-gray-700 hover:border-gray-300' }} text-sm font-medium leading-5 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out">
    {{$slot}}
</a>
