@extends('layouts.app')

@section('content')

    <section class="lg:pl-32 mt-12">
        @foreach($posts as $post)
            <x-blog-post :article="$post" :full="$full"/>
        @endforeach
    </section>

@endsection
