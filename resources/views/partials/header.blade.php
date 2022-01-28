<header class="container">
   <ul class="nav nav-pills mt-3 mb-5">
      <li class="nav-item">
         <a class="nav-link {{ (Route::currentRouteName() === 'home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
      </li>
      <li class="nav-item">
         <a class="nav-link {{ (Route::currentRouteName() === 'comics.index') ? 'active' : '' }}" href="{{ route('comics.index') }}">Comics</a>
      </li>
      <li class="nav-item">
         <a class="nav-link {{ (Route::currentRouteName() === 'comics.create') ? 'active' : '' }}" href="{{ route('comics.create') }}">New Comic</a>
      </li>
   </ul>
</header>