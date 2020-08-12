@extends('layouts.app')

@section('content')
    <section class="mt-20 lg:pl-32">
        @foreach($blogs as $blog)
            <x-blog-list-item :blog="$blog" />
        @endforeach
    </section>
@endsection
