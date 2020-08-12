@extends('layouts.app')

@section('content')
    <x-section>
        @foreach($blogs as $blog)
            <x-blog-list-item :blog="$blog"/>
        @endforeach
    </x-section>
@endsection
