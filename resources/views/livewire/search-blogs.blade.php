<div>
    <div class="max-w-lg w-full lg:max-w-xs">
        <label for="search" class="sr-only">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                          d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                          clip-rule="evenodd"/>
                </svg>
            </div>
            <input wire:model="query"
                   wire:keydown="search"
                   id="search"
                   class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md leading-5 bg-white dark:bg-gray-100 dark:text-gray-800 placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:border-2 focus:border-blue-300 focus:shadow-outline-blue sm:text-sm transition duration-150 ease-in-out"
                   placeholder="Press '/' to Search"
                   type="search">
        </div>
        @if(count($results) && \Illuminate\Support\Str::length($query) > 0)
            <div class="absolute right-0 p-2 bg-white shadow-md rounded-md mt-3 flex flex-col">
                @foreach($results as $result)
                    <a href="{{route('blog.show',$result->slug)}}"
                       class="text-sm w-full px-2 py-2 dark:text-gray-800 hover:bg-gray-50 rounded-md hover:font-semibold transition ease-in-out duration-300">
                        {{$result->title}}
                        <span class="text-xs text-gray-400">({{$result->publish_date->format('M j, Y')}})</span>
                    </a>
                @endforeach
            </div>
        @endif
    </div>
</div>
