<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/app.css">
    <title>My Blog</title>
</head>

<body>

    @foreach ($posts as $post)
        {{-- There's an implicit $loop variable that is created for PHP compilation. Use that to check things like what loop you're on, if it's an even or odd loop, how many total loops you need, etc. --}}
        <article class="{{ $loop->even ? 'foobar' : '' }}">
            <a href="/posts/{{ $post->slug }}">
                <h1>{{ $post->title }}</h1>
            </a>

            <div>
                {{ $post->excerpt }}
            </div>

        </article>
    @endforeach;

</body>

</html>
