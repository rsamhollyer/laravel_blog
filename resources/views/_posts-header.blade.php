<header class="mx-auto mt-20 max-w-xl text-center">
 <h1 class="text-4xl">
  Latest <span class="text-blue-500">Laravel From Scratch</span> News
 </h1>

 <div class="mt-4 space-y-2 lg:space-y-0 lg:space-x-4">
  <!--  Category -->
  <div class="relative lg:inline-flex bg-gray-100 rounded-xl">
   <x-dropdown>
    <x-slot name='trigger'>

     <button
             class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-36 text-left flex lg:inline-flex">
      {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}

      {{-- <x-down-arrow class="pointer-events-none absolute"
                    style="right: 12px;" /> --}}

      <x-icon name='down-arrow' class="pointer-events-none absolute" style="right: 12px;" />

     </button>

    </x-slot>
    <x-dropdown-item href="/" :active="request()->routeIs('home')">All</x-dropdown-item>

    @foreach ($categories as $category)
     <x-dropdown-item href="/categories/{{ $category->slug }}" :active='request()->is("categories/{$category->slug}")'>
      {{ ucwords($category->name) }}
     </x-dropdown-item>
    @endforeach
   </x-dropdown>
  </div>



  <!-- Search -->
  <div class="relative flex items-center rounded-xl bg-gray-100 px-3 py-2 lg:inline-flex">
   <form method="GET" action="#">
    <input type="text" name="search" placeholder="Find something"
           class="bg-transparent text-sm font-semibold placeholder-black"
           value="{{ request('search') }}">

   </form>
  </div>
 </div>
</header>
