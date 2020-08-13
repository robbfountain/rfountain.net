<article class="sm:px-4 mt-20 container mx-auto prose dark:prose-dark lg:prose-2xl">
    <div class="text-5xl font-bold leading-tight dark:text-gray-100">
        {{$blog->title}}
    </div>
    @if($blog->publish_date)
        <div class="text-gray-600 dark:text-gray-100 text-sm">
            <span>
                Published {{$blog->publish_date->format('M d, Y')}}
            </span>
            <span class="mx-2">
                |
            </span>
            <span>
                {{\App\Classes\Helper::minutesToRead($blog->body)}} minute read
            </span>
        </div>
    @endif
    {!! $blog->content !!}
</article>

@if($blog->author)
    <div class="prose sm:prose-sm prose-lg pb-12 max-w-4xl container mx-auto">
        <div class="bg-gray-50 dark:bg-gray-800 rounded-md p-2 px-4 flex border border-gray-200 dark:border-gray-800 ">
            <div class="mr-2 w-1/5 text-center">
                <img src="{{$blog->author->avatar}}"
                     class="h-32 w-32 rounded-full p-2 bg-white"
                     alt="{{$blog->author->name}}'s Avatar">
            </div>
            <div class="flex-1 pt-3">
                <p class="dark:text-gray-100 text-lg mt-4 font-semibold underline">By {{$blog->author->name}}</p>
                <div class="text-lg -mt-4 dark:text-gray-100">
                    {!! $blog->author->bio !!}
                </div>
            </div>
        </div>
    </div>
@endif
