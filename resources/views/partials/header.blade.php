<header class="container">
   <ul class="nav nav-pills my-3">
      <li class="nav-item">
         <a class="nav-link {{ (Route::currentRouteName() === 'home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
      </li>
      <li class="nav-item">
         <a class="nav-link {{ (Route::currentRouteName() === 'comics.index') ? 'active' : '' }}" href="{{ route('comics.index') }}">Comics</a>
      </li>
   </ul>
</header>