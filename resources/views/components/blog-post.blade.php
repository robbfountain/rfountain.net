<article class="prose lg:prose-2xl">
    <h2>
        @if($full )
            {{$article->title}}
        @else
            <a class="text-gray-900 hover:text-gray-800 transition ease-in-out duration-300" href="{{route('blog.show', $article->slug)}}">
                {{$article->title}}
            </a>
        @endif
    </h2>
    @if($full)
        {!! $article->content !!}
    @else
        {!! $article->excerpt ?? $article->content !!}
    @endif
</article>
