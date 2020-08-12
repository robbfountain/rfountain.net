@props(['blog'])

<meta name="description" content="{{$blog->meta['meta_description']}}" />
<meta property="og:title" content="{{$blog->meta['opengraph_title'] ?? $blog->title }}" />
<meta property="og:description" content="{{$blog->meta['opengraph_description'] ?? $blog->meta['meta_description']}}" />
<meta property="og:url" content="{{route('blog.show',$blog->slug)}}" />
<meta property="og:image" content="{{$blog->meta['opengraph_image']}}" />
<meta property="og:type" content="article">
<meta name="twitter:card" content="{{$blog->meta['meta_description']}}">
<meta name="twitter:creator" content="@rfountain207" />
