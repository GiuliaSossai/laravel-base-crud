<header class="container d-flex justify-content-between align-items-center">
   <div class="header-left">
      <a href="#"><img src="{{ asset('img/dc-logo.png')}}" alt="dc logo"></a> 
   </div>

   <div class="header-right">
      <ul class="nav nav-pills">
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
   </div>
   
</header>