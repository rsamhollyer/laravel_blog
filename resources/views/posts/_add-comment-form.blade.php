@auth
 <x-panel>
  <form method="POST"
   action="/posts/{{ $post->slug }}/comments">
   @csrf

   <header class='flex items-center'>

    <img src="https://i.pravatar.cc/40?u={{ auth()->id() }}"
     alt="User Avatar"
     class='rounded-full' />

    <h2 class='ml-4'>
     Want to participate?
    </h2>

   </header>

   <div class='mt-6'>

    <textarea
     class='w-full rounded-xl bg-gray-100 p-2 text-sm focus:outline-none focus:ring'
     name="body"
     rows="5"
     placeholder="Write your comment here..."
     required></textarea>

    @error('body')
     <span class='text-xs text-red-500'>{{ $message }}</span>
    @enderror

   </div>

   <div class='border-bg-gray-200 mt-4 flex justify-end border-t pt-4'>

    <x-submit-button>Submit</x-submit-button>

   </div>

  </form>
 </x-panel>
@else
 <p class='font-semibold'>

  <a class='text-blue-500 hover:underline'
   href="/register">
   Register
  </a>
  or
  <a class='text-blue-500 hover:underline'
   href='/login'>
   login
  </a>
  to comment!
 </p>
@endauth
