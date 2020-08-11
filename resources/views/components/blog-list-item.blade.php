@props(['blog'])

<div class="lg:-m-0 mb-8">
    <a class="hover:underline transition ease-in-out duration-300" href="{{route('blog.show',$blog->slug)}}">
        <h3 class="text-gray-900 text-xl font-bold">{{$blog->title}}</h3>
    </a>
    <div class="text-gray-600">
        {{$blog->publish_date->format('M d, Y')}}
    </div>

    <div class="mt-3 tracking-wide">
        {!! $blog->excerpt !!}
    </div>

    <div class="mt-4 pt-2">
        <a href="{{route('blog.show', $blog->slug)}}" class="text-gray-500 hover:text-gray-700 transition ease-in-out duration-300">
            Read the Post
            <i class="ml-2 fas fa-arrow-right"></i>
        </a>
    </div>
</div>
