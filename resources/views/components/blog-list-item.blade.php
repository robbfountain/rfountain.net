@props(['blog'])

<article class="mx-auto mb-8 pb-8 border-b border-gray-800 prose dark:prose-dark lg:prose-xl">
    <h2>
        <a class="text-3xl hover:underline transition ease-in-out duration-300 "
           href="{{route('blog.show',$blog->slug)}}">
            {{$blog->title}}
        </a>
    </h2>

    <div class="">
        <span>
            {{$blog->publish_date->format('M d, Y')}}
        </span>
        <span class="mx-4">|</span>
        <span>
            {{\App\Classes\Helper::minutesToRead($blog->body)}} minute read
        </span>
    </div>

    {!! $blog->excerpt !!}

    <div class="mt-3">
        <a href="{{route('blog.show', $blog->slug)}}"
           class="text-indigo-500 hover:text-indigo-300 transition ease-in-out duration-300">
            Read the Post
            <i class="ml-2 fas fa-arrow-right"></i>
        </a>
    </div>
</article>
