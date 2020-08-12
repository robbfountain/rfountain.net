<a href="{{$asPage ? route('page.show',$route) : route($route)}}"
   class="ml-8 inline-flex items-center px-1 pt-1 border-b-2 {{Request::routeIs($route) || Request::url() == route('page.show',$route) || Request::url() == route('blog.show',$route) ? 'border-indigo-500 dark:border-green-500 text-gray-900 dark:text-gray-100' : 'text-gray-500 dark:text-gray-100 border-transparent hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300 dark:hover:border-gray-100' }} text-sm font-medium leading-5 focus:outline-none focus:border-indigo-700 dark:focus:border-green-500 transition duration-300 ease-in-out">
    {{$slot}}
</a>
