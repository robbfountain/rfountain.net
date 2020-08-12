@extends('layouts.app')

@section('content')
    <x-blog-post :blog="$intro"/>

    <x-section>
        <h2 >Some Recent Posts</h2>
        @foreach(\App\Blog::getRecent() as $blog)
            <x-blog-list-item :blog="$blog" />
        @endforeach
    </x-section>
@endsection

