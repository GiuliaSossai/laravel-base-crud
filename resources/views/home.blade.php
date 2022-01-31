@extends('layouts.main')

@section('content')

   <main class="gs-bg-dark">
      <div class="jumbotron"></div>

      <div class="container">
         <button class="big-btn">current series</button>
         <div class="main-cards">

            @foreach (config('comics') as $comic)
            <div class="card-box">
               <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                    
               <h5>{{$comic['series']}}</h5>
            </div>
            @endforeach

         </div>  
      </div>

      <button>load more</button>
      
   </main>

@endsection