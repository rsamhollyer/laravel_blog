<div class="mt-8 md:mt-0 flex item-center">
 @auth
  <span class='text-xs font-bold uppercase'>
   Welcome, {{ auth()->user()->name }}!
  </span>

  <form method="POST"
   action="/logout"
   class='text-xs font-semi-bold text-blue-500 ml-6'>
   @csrf

   <button type="submit">
    Logout
   </button>

  </form>
 @else
  <a href="/register"
   class="text-xs font-bold uppercase">Register
  </a>

  <a href="/login"
   class="text-xs ml-6 font-bold uppercase">Log In
  </a>

 @endauth

 <a href="#"
  class="ml-3 rounded-full bg-blue-500 py-3 px-5 text-xs font-semibold uppercase text-white">
  Subscribe for Updates
 </a>
</div>
