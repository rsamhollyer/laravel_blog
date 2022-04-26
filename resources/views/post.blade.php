<x-layout>
    <article>
        <h1>{{ $post->title }}</h1>
        <div>

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

        </div>

        <br />

        <div>
            <p>{!! $post->body !!}</p>
        </div>

    </article>
    <br />
    <a href="/">Home</a>

</x-layout>
