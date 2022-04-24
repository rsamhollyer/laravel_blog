<x-layout>
    <article>
        <h1>{{ $post->title }}</h1>
        <span><a href="#">{{ $post->category->name }}</a></span>

        <div>
            <p>{{ $post->body }}</p>
        </div>
    </article>
    <a href="/">Home</a>
</x-layout>
