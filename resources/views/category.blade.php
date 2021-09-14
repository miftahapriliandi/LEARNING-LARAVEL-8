@extends('layouts.main')

@section('content')

    <h1 class="mb-5">Post Category : {{ $category }}</h1>

    @foreach ($posts as $post)

    <article class="mb-5">

        <a href="/posts/{{ $post->slug }}"><h2>{{ $post->title }}</h2></a>
        <p>{{ $post->excerpt }}</p>

    </article>

    @endforeach

@endsection

{{-- $post::create(
    [
        'title'=> 'Third Title',
        'category_id'=> 3,
        'slug'=> 'third-title',
        'excerpt'=> 'Lorem ipsum dolor sit amet pertama',
        'body'=> '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, porro? Delectus perspiciatis officiis ab, recusandae repellat cum veniam expedita consequuntur?</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo distinctio provident sit nobis repudiandae neque nulla. Omnis deleniti maiores aut debitis harum facilis dolores voluptates iusto incidunt repellat, sed vero?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi amet reiciendis nostrum corrupti! Voluptatem accusamus magnam, placeat ullam temporibus nulla quasi culpa praesentium possimus? Cupiditate, recusandae. Labore a nulla, ipsam impedit, corporis debitis reprehenderit quidem magnam, quia porro adipisci culpa nesciunt maxime tempore sint veritatis eaque! Laborum at eligendi molestias.</p>'
    ]
) --}}