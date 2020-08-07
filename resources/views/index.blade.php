@extends('layouts.app')

@section('content')
    <section class="lg:pl-32 mt-12">
        @if($intro)
            <x-blog-post :blog="$intro"/>
        @endif
    </section>
@endsection

