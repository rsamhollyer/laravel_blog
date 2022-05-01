@props(['post'])

<article
 {{ $attributes->merge(['class' =>'transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl']) }}
>
 <div class="py-6 px-5">
  <div>
   {{-- TODO --}}
   <img
    src="/images/illustration-3.png"
    alt="Blog Post illustration"
    class="rounded-xl"
   >
  </div>

  <div class="mt-8 flex flex-col justify-between">
   <header>
    <div class="space-x-2">
     <a
      href="/categories/{{ $post->category->slug }}"
      class="rounded-full border border-blue-300 px-3 py-1 text-xs font-semibold uppercase text-blue-300"
      style="font-size: 10px"
     >{{ $post->category->name }}</a>

    </div>

    <div class="mt-4">
     <h1 class="text-3xl">
      {{ $post->title }}
     </h1>

     <span class="mt-2 block text-xs text-gray-400">
      Published <time>{{ $post->created_at->diffForHumans() }}</time>
     </span>
    </div>
   </header>

   <div class="mt-4 space-y-4 text-sm">
    {!! $post->excerpt !!}
   </div>

   <footer class="mt-8 flex items-center justify-between">
    <div class="flex items-center text-sm">
     <img
      src="/images/lary-avatar.svg"
      alt="Lary avatar"
     >
     <div class="ml-3">
      <h5 class='font-bold'>
       <x-author-link :author="$post->author" />
       </a>
      </h5>

     </div>
    </div>

    <div>
     <a
      href="/posts/{{ $post->slug }}"
      class="rounded-full bg-gray-200 py-2 px-8 text-xs font-semibold transition-colors duration-300 hover:bg-gray-300"
     >Read
      More</a>
    </div>
   </footer>
  </div>
 </div>
</article>
