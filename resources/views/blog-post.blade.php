@extends('layouts.app')

@section('meta')
    <x-blog-meta :blog="$blog"/>
@endsection

@section('content')
    <x-blog-post :blog="$blog"/>
@endsection
