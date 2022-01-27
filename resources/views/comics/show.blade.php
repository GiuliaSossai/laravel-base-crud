@extends('layouts.main')

@section('content')
   
   <main class="container">
      <h1>{{ $comic->title }}</h1>
      <div class="my-4">
         <img src="{{ $comic->image }}" alt="">
      </div>
      <p>Price: {{ $comic->price }}£</p>
      <p>Series: {{ $comic->series }}</p>
      <p>Type: {{ $comic->type }}</p>
      <p>{{ $comic->description }}</p>

      <div> <a href="{{ route('comics.index') }}"> << back </a> </div>

   </main>

@endsection