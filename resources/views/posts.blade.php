@extends('layouts.main')

@section('content')

    <h1 class="mb-5">Halaman Blog</h1>

    @foreach ($posts as $post)

    <article class="mb-5 border-bottom pb-4">

        <a href="/posts/{{ $post->slug }}" class="text-decoration-none"><h2>{{ $post->title }}</h2></a>
        <p>by. <a href="" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
        <p>{{ $post->excerpt }}</p>

        <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read More ...</a>

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
