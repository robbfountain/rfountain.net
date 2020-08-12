@props(['blog'])

<div class="lg:-m-0 mb-8">
    <a class="text-gray-900 dark:text-gray-100 text-3xl hover:underline transition ease-in-out duration-300 "
       href="{{route('blog.show',$blog->slug)}}">
        <h2>{{$blog->title}}</h2>
    </a>

    <div class="text-gray-600 dark:text-gray-100">
        <span>
            {{$blog->publish_date->format('M d, Y')}}
        </span>
        <span class="mx-4">|</span>
        <span>
            {{\App\Classes\Helper::minutesToRead($blog->body)}} minute read
        </span>
    </div>

    <div class="mt-3 text-lg tracking-normal leading-normal dark:text-gray-100 ">
        {!! $blog->excerpt !!}
    </div>

    <div class="mt-4 pt-2">
        <a href="{{route('blog.show', $blog->slug)}}"
           class="text-indigo-500 hover:text-indigo-300 transition ease-in-out duration-300">
            Read the Post
            <i class="ml-2 fas fa-arrow-right"></i>
        </a>
    </div>
</div>
