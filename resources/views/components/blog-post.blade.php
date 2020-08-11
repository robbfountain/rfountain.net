<article class="mt-12 lg:container mx-auto prose lg:prose-2xl">
    <h2>
        {{$blog->title}}
    </h2>

    {!! $blog->content !!}
</article>

{{--<div class="mt-6 lg:container mx-auto">--}}
{{--    <div class="flex justify-start bg-orange-300 max-w-2xl p-6">--}}
{{--        <div class="mr-6 w-1/5">--}}
{{--            <img src="{{$blog->author->avatar}}" alt="">--}}
{{--        </div>--}}
{{--        <div class="ml-8">--}}
{{--            <p class="text-2xl">By {{$blog->author->name}}</p>--}}
{{--            <div class="text-xl">--}}
{{--                {!! $blog->author->bio !!}--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
