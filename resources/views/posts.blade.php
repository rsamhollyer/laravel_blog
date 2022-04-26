{{-- @extends('layout')

@section('content')
    @foreach ($posts as $post) --}}
{{-- <article class="{{ $loop->even ? 'foobar' : '' }}">
            <a href="/posts/{{ $post->slug }}">
                <h1>{{ $post->title }}</h1>
            </a>

            <div>
                {{ $post->excerpt }}
            </div>

        </article>
    @endforeach
@endsection --}}
{{-- This section above does not take advantage of the blade component syntax --}}


<x-layout>
    @foreach ($posts as $post)
        <article>
            <a href="/posts/{{ $post->slug }}">
                <h1>{{ $post->title }}</h1>
            </a>

            <span>
                By
                <a href="/authors/{{ $post->author->username }}">
                    {{ $post->author->name }}
                </a>
                in
                <a href="/categories/{{ $post->category->slug }}">
                    {{ $post->category->name }}
                </a>
            </span>

            <div>
                {{ $post->excerpt }}
            </div>

        </article>
    @endforeach
</x-layout>
