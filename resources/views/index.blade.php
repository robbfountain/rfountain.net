@extends('layouts.app')

@section('content')
    <section class="lg:pl-32 mt-12">
        <!-- Intro -->
        <x-blog-post :blog="$intro" />
    </section>
@endsection

