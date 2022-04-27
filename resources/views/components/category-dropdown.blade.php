<x-dropdown>
 <x-slot name='trigger'>

  <button class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-36 text-left flex lg:inline-flex">
   {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}

   {{-- <x-down-arrow class="pointer-events-none absolute"
                  style="right: 12px;" /> --}}

   <x-icon name='down-arrow' class="pointer-events-none absolute" style="right: 12px;" />

  </button>

 </x-slot>
 <x-dropdown-item href="/" :active="request()->query('category') === ''">All</x-dropdown-item>

 @foreach ($categories as $category)
  <x-dropdown-item href="/?category={{ $category->slug }}" :active="request()->query('category') === $category->slug">
   {{ ucwords($category->name) }}
  </x-dropdown-item>
 @endforeach
</x-dropdown>
