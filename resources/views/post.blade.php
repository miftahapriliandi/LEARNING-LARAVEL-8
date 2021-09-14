@extends('layouts.main')

@section('content')


        <h1>{{ $post->title }}</h1>
        <p>by. <a href="" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
        {!! $post->body !!}

    <a href="/posts">Back to Posts</a>


@endsection


