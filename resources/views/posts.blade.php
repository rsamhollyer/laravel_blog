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
        {{-- There's an implicit $loop variable that is created for PHP compilation. Use that to check things like what loop you're on, if it's an even or odd loop, how many total loops you need, etc. --}}
        <article class="{{ $loop->even ? 'foobar' : '' }}">

            <a href="/posts/{{ $post->slug }}">
                <h1>{{ $post->title }}</h1>
            </a>

            <span>
                <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </span>

            <div>
                {{ $post->excerpt }}
            </div>

        </article>
    @endforeach
</x-layout>
