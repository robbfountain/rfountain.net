@extends('layouts.app')

@section('content')
    <section class="mt-20 container">
        @foreach($blogs as $blog)
            <x-blog-list-item :blog="$blog" />
        @endforeach
    </section>
@endsection
