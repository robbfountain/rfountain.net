@extends('layouts.app')

@section('content')
    <section class="mt-8 lg:container">
            <x-blog-post :blog="$intro"/>
    </section>
@endsection

